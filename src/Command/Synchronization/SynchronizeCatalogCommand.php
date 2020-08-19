<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Command\Synchronization;

use Doctrine\ORM\EntityManagerInterface;
use Hastegan\Sattrak\Command\Abstraction\AbstractTrackCommand;
use Hastegan\Sattrak\Entity\CatalogEntry;
use Hastegan\Sattrak\Repository\CatalogEntryRepository;
use Hastegan\Sattrak\Service\CatalogEntry\MergeCatalogEntries;
use Hastegan\Sattrak\Service\EntityBuilder\CatalogEntryEntityBuilder;
use Hastegan\Sattrak\Service\Synchronization\CatalogEntry\ParseLine;
use Hastegan\Sattrak\Service\Synchronization\Reader\ReaderFactory;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class SynchronizeCatalogCommand extends AbstractTrackCommand
{
    protected static $defaultName = 'app:sync:catalog';

    /** @var SymfonyStyle */
    private $io;

    /** @var string */
    private $path;

    /** @var ReaderFactory */
    private $readerFactory;

    /** @var ParseLine */
    private $lineParser;

    /** @var CatalogEntryEntityBuilder */
    private $catEntryBuilder;

    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var CatalogEntryRepository */
    private $catEntryRepository;

    /** @var MergeCatalogEntries */
    private $mergeCatalogEntries;

    /** @var ValidatorInterface */
    private $validator;

    /** @var LoggerInterface */
    private $logger;

    /** @var int */
    private $clearBatchSize = 500;

    public function __construct(
        ReaderFactory $readerFactory,
        ParseLine $lineParser,
        CatalogEntryEntityBuilder $catEntryBuilder,
        EntityManagerInterface $entityManager,
        CatalogEntryRepository $catEntryRepository,
        MergeCatalogEntries $mergeCatalogEntries,
        ValidatorInterface $validator,
        LoggerInterface $logger
    ) {
        parent::__construct();

        $this->readerFactory = $readerFactory;
        $this->lineParser = $lineParser;
        $this->catEntryBuilder = $catEntryBuilder;
        $this->entityManager = $entityManager;
        $this->catEntryRepository = $catEntryRepository;
        $this->mergeCatalogEntries = $mergeCatalogEntries;
        $this->validator = $validator;
        $this->logger = $logger;
    }

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setDescription('Synchronize the catalog entries')
            ->addOption('path', null, InputArgument::OPTIONAL, 'Pat or url of the file to ingest')
        ;
    }

    /**
     * @inheritDoc
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->io = new SymfonyStyle($input, $output);

        if (null !== $path = $input->getOption('path')) {
            $this->path = $path;
        }
    }

    /**
     * @inheritDoc
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        if (null !== $this->path) {
            return;
        }

        $this->path = $this->io->ask('SatCat path');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->io->title('Synchronize Catalog');

        $reader = $this->readerFactory->getForPath($this->path);

        $counter = 1;

        foreach ($reader->read($this->path) as $line) {
            $dto = $this->lineParser->parse($line);
            $violations = $this->validator->validate($dto);

            if ($violations->count()) {
                $this->io->write('E');

                $this->logger->error(
                    sprintf('Error while syncing satcat entry "%s"', $line),
                    ['violations' => $violations]
                );

                continue;
            }

            $catalogEntry = $this->catEntryBuilder->build($dto);
            $catalogEntry = $this->getPersisted($catalogEntry);

            if (!$this->entityManager->contains($catalogEntry)) {
                $this->entityManager->persist($catalogEntry);
            }

            if ($counter++ % $this->clearBatchSize === 0) {
                $this->entityManager->flush();
                $this->entityManager->clear();
            }

            $this->io->write('.');
        }

        $this->io->newLine();

        $this->entityManager->flush();

        return 0;
    }

    /**
     * @param CatalogEntry $catalogEntry
     *
     * @return CatalogEntry
     */
    private function getPersisted(CatalogEntry $catalogEntry): CatalogEntry
    {
        $persistedEntry = $this->catEntryRepository->findOneBy([
            'noradCatalogNumber' => $catalogEntry->getNoradCatalogNumber()
        ]);

        if (!$persistedEntry instanceof CatalogEntry) {
            $this->logger->info(sprintf('New satcat entry "%s"', $catalogEntry->getRaw()));

            return $catalogEntry;
        }

        if ($persistedEntry->getRaw() === $catalogEntry->getRaw()) {
            $this->logger->info(sprintf('Satcat entry did not change "%s"', $catalogEntry->getRaw()));

            return $persistedEntry;
        }

        $this->logger->info(sprintf('Satcat entry has changed "%s"', $catalogEntry->getRaw()));

        return $this->mergeCatalogEntries->merge($persistedEntry, $catalogEntry);
    }
}
