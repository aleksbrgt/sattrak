<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Command\Synchronization;

use Doctrine\ORM\EntityManagerInterface;
use Hastegan\Sattrak\Entity\CatalogEntry;
use Hastegan\Sattrak\Repository\CatalogEntryRepository;
use Hastegan\Sattrak\Service\CatalogEntry\MergeCatalogEntries;
use Hastegan\Sattrak\Service\EntityBuilder\CatalogEntryEntityBuilder;
use Hastegan\Sattrak\Service\Synchronization\CatalogEntry\ParseLine;
use Hastegan\Sattrak\Service\Synchronization\Reader\ReaderFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Throwable;

class SynchronizeCatalogCommand extends Command
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
    private $catalogEntryBuilder;

    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var CatalogEntryRepository */
    private $catalogEntryRepository;

    /** @var MergeCatalogEntries */
    private $mergeCatalogEntries;

    /** @var ValidatorInterface */
    private $validator;

    /** @var int */
    private $clearBatchSize = 500;

    public function __construct(
        ReaderFactory $readerFactory,
        ParseLine $lineParser,
        CatalogEntryEntityBuilder $catalogEntryBuilder,
        EntityManagerInterface $entityManager,
        MergeCatalogEntries $mergeCatalogEntries,
        ValidatorInterface $validator
    ) {
        parent::__construct();

        $this->readerFactory = $readerFactory;
        $this->lineParser = $lineParser;
        $this->catalogEntryBuilder = $catalogEntryBuilder;
        $this->entityManager = $entityManager;
        $this->catalogEntryRepository = $entityManager->getRepository(CatalogEntry::class);
        $this->mergeCatalogEntries = $mergeCatalogEntries;
        $this->validator = $validator;
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

                continue;
            }

            try {
                $catalogEntry = $this->catalogEntryBuilder->build($dto);
            } catch (Throwable $exception) {
                throw new $exception;
            }

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

        return 0;
    }

    /**
     * @param CatalogEntry $catalogEntry
     *
     * @return CatalogEntry
     */
    private function getPersisted(CatalogEntry $catalogEntry): CatalogEntry
    {
        $persistedEntry = $this->catalogEntryRepository->findOneBy([
            'noradCatalogNumber' => $catalogEntry->getNoradCatalogNumber()
        ]);

        if (!$persistedEntry instanceof CatalogEntry) {
            $this->entityManager->persist($catalogEntry);

            return $catalogEntry;
        }

        $persistedEntry = $this->mergeCatalogEntries->merge($persistedEntry, $catalogEntry);

        return $persistedEntry;
    }
}
