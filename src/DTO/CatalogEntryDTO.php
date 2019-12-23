<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class CatalogEntryDTO
{
    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $raw;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $internalDesignator;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $noradCatalogNumber;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $names;

    /**
     * @var bool|null
     *
     * @Assert\NotBlank()
     */
    private $hasPayload;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $operationalStatus;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $source;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $launchDate;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $launchSite;

    /**
     * @var string|null
     *
     * @Assert\NotBlank(allowNull=true)
     */
    private $decayDate;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $orbitalStatus;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $orbitalPeriod;


    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $inclination;

    /**
     * @var int|null
     *
     * @Assert\NotBlank()
     */
    private $apogee;

    /**
     * @var int|null
     *
     * @Assert\NotBlank()
     */
    private $perigee;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     */
    private $radarCrossSection;

    /**
     * @return string|null
     */
    public function getRaw(): ?string
    {
        return $this->raw;
    }

    /**
     * @param string|null $raw
     *
     * @return CatalogEntryDTO
     */
    public function setRaw(?string $raw): CatalogEntryDTO
    {
        $this->raw = $raw;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInternalDesignator(): ?string
    {
        return $this->internalDesignator;
    }

    /**
     * @param string|null $internalDesignator
     *
     * @return CatalogEntryDTO
     */
    public function setInternalDesignator(?string $internalDesignator): CatalogEntryDTO
    {
        $this->internalDesignator = $internalDesignator;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoradCatalogNumber(): ?string
    {
        return $this->noradCatalogNumber;
    }

    /**
     * @param string|null $noradCatalogNumber
     *
     * @return CatalogEntryDTO
     */
    public function setNoradCatalogNumber(?string $noradCatalogNumber): CatalogEntryDTO
    {
        $this->noradCatalogNumber = $noradCatalogNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNames(): ?string
    {
        return $this->names;
    }

    /**
     * @param string|null $names
     *
     * @return CatalogEntryDTO
     */
    public function setNames(?string $names): CatalogEntryDTO
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasPayload(): ?bool
    {
        return $this->hasPayload;
    }

    /**
     * @param bool|null $hasPayload
     *
     * @return CatalogEntryDTO
     */
    public function setHasPayload(?bool $hasPayload): CatalogEntryDTO
    {
        $this->hasPayload = $hasPayload;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOperationalStatus(): ?string
    {
        return $this->operationalStatus;
    }

    /**
     * @param string|null $operationalStatus
     *
     * @return CatalogEntryDTO
     */
    public function setOperationalStatus(?string $operationalStatus): CatalogEntryDTO
    {
        $this->operationalStatus = $operationalStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     *
     * @return CatalogEntryDTO
     */
    public function setSource(?string $source): CatalogEntryDTO
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLaunchDate(): ?string
    {
        return $this->launchDate;
    }

    /**
     * @param string|null $launchDate
     *
     * @return CatalogEntryDTO
     */
    public function setLaunchDate(?string $launchDate): CatalogEntryDTO
    {
        $this->launchDate = $launchDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLaunchSite(): ?string
    {
        return $this->launchSite;
    }

    /**
     * @param string|null $launchSite
     *
     * @return CatalogEntryDTO
     */
    public function setLaunchSite(?string $launchSite): CatalogEntryDTO
    {
        $this->launchSite = $launchSite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDecayDate(): ?string
    {
        return $this->decayDate;
    }

    /**
     * @param string|null $decayDate
     *
     * @return CatalogEntryDTO
     */
    public function setDecayDate(?string $decayDate): CatalogEntryDTO
    {
        $this->decayDate = $decayDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrbitalStatus(): ?string
    {
        return $this->orbitalStatus;
    }

    /**
     * @param string|null $orbitalStatus
     *
     * @return CatalogEntryDTO
     */
    public function setOrbitalStatus(?string $orbitalStatus): CatalogEntryDTO
    {
        $this->orbitalStatus = $orbitalStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrbitalPeriod(): ?string
    {
        return $this->orbitalPeriod;
    }

    /**
     * @param string|null $orbitalPeriod
     *
     * @return CatalogEntryDTO
     */
    public function setOrbitalPeriod(?string $orbitalPeriod): CatalogEntryDTO
    {
        $this->orbitalPeriod = $orbitalPeriod;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInclination(): ?string
    {
        return $this->inclination;
    }

    /**
     * @param string|null $inclination
     *
     * @return CatalogEntryDTO
     */
    public function setInclination(?string $inclination): CatalogEntryDTO
    {
        $this->inclination = $inclination;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getApogee(): ?int
    {
        return $this->apogee;
    }

    /**
     * @param int|null $apogee
     *
     * @return CatalogEntryDTO
     */
    public function setApogee(?int $apogee): CatalogEntryDTO
    {
        $this->apogee = $apogee;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerigee(): ?int
    {
        return $this->perigee;
    }

    /**
     * @param int|null $perigee
     *
     * @return CatalogEntryDTO
     */
    public function setPerigee(?int $perigee): CatalogEntryDTO
    {
        $this->perigee = $perigee;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRadarCrossSection(): ?string
    {
        return $this->radarCrossSection;
    }

    /**
     * @param string|null $radarCrossSection
     *
     * @return CatalogEntryDTO
     */
    public function setRadarCrossSection(?string $radarCrossSection): CatalogEntryDTO
    {
        $this->radarCrossSection = $radarCrossSection;

        return $this;
    }
}
