<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\EntityBuilder;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Hastegan\Sattrak\DTO\CatalogEntryDTO;
use Hastegan\Sattrak\Entity\CatalogEntry;
use Hastegan\Sattrak\Entity\Embeddable\OrbitalInformation;
use Hastegan\Sattrak\Entity\LaunchSite;
use Hastegan\Sattrak\Entity\Source;
use Hastegan\Sattrak\Enum\CatalogEntryOrbitalStatusEnum;

class CatalogEntryEntityBuilder
{
    /** @var EntityRepository */
    private $sourceRepository;

    /** @var EntityRepository */
    private $launchSiteRepository;

    /** @var SourceBuilder */
    private $sourceBuilder;

    /** @var LaunchSiteBuilder */
    private $launchSiteBuilder;

    public function __construct(
        EntityManagerInterface $entityManager,
        SourceBuilder $sourceBuilder,
        LaunchSiteBuilder $launchSiteBuilder
    ) {
        $this->sourceRepository = $entityManager->getRepository(Source::class);
        $this->launchSiteRepository = $entityManager->getRepository(LaunchSite::class);
        $this->sourceBuilder = $sourceBuilder;
        $this->launchSiteBuilder = $launchSiteBuilder;
    }

    public function build(CatalogEntryDTO $dto): CatalogEntry
    {
        $decayDate = null;
        if (null !== $dto->getDecayDate()) {
            $decayDate = DateTime::createFromFormat(
                'Y-m-d',
                $dto->getDecayDate()
            )->setTime(0, 0, 0);
        }

        $radarCrossSection = null;
        if ('N/A' !== $dto->getRadarCrossSection()) {
            $radarCrossSection = $dto->getRadarCrossSection();
        }

        $entry = (new CatalogEntry())
            ->setRaw($dto->getRaw())
            ->setInternationalDesignator($dto->getInternalDesignator())
            ->setNoradCatalogNumber($dto->getNoradCatalogNumber())
            ->setNames($dto->getNames())
            ->setHasPayload($dto->getHasPayload())
            ->setLaunchDate(DateTime::createFromFormat(
                'Y-m-d',
                $dto->getLaunchDate()
            )->setTime(0, 0, 0))
            ->setLaunchSite($this->getLaunchSite($dto->getLaunchSite()))
            ->setDecayDate($decayDate)
            ->setOrbitalStatus($dto->getOrbitalStatus() ?? CatalogEntryOrbitalStatusEnum::EARTH_ORBIT)
            ->setOrbitalInformation(
                (new OrbitalInformation())
                    ->setOrbitalPeriod($dto->getOrbitalPeriod())
                    ->setInclination($dto->getInclination())
                    ->setApogee($dto->getApogee())
                    ->setPerigee($dto->getPerigee())
                    ->setRadarCrossSection($radarCrossSection)
            )
        ;

        if (null !== $dto->getOperationalStatus()) {
            $entry->setOperationalStatus($dto->getOperationalStatus());
        }

        if ('TBD' !== $dto->getSource()) {
            $entry->setSource($this->getSource($dto->getSource()));
        }

        return $entry;
    }

    /**
     * @param string $code
     *
     * @return LaunchSite
     */
    private function getLaunchSite(string $code): LaunchSite
    {
        $site = $this->launchSiteRepository->findOneBy([
            'code' => $code,
        ]);

        if (!$site instanceof LaunchSite) {
            return $this->launchSiteBuilder->buildFromCode($code);
        }

        return $site;
    }

    /**
     * @param string $code
     *
     * @return Source
     */
    private function getSource(string $code): Source
    {
        $source = $this->sourceRepository->findOneBy([
            'code' => $code,
        ]);

        if (!$source instanceof Source) {
            $source = $this->sourceBuilder->buildFromCode($code);
        }

        return $source;
    }
}
