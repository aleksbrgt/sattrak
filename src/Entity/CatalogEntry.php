<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityTrait;
use Hastegan\Sattrak\Entity\Abstraction\TimestampedEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\TimeStampedEntityTrait;
use Hastegan\Sattrak\Entity\Embeddable\OrbitalInformation;

/**
 * @ORM\Entity()
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class CatalogEntry implements GUIDEntityInterface, TimestampedEntityInterface
{
    use GUIDEntityTrait, TimeStampedEntityTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $raw;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true, name="international_designator")
     */
    private $internationalDesignator;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true, name="norad_catalog_number")
     */
    private $noradCatalogNumber;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $names;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", name="has_payload")
     */
    private $hasPayload;

    /**
     * @var string|null
     *
     * @ORM\Column(type="catalog_entry_operational_status", nullable=true)
     */
    private $operationalStatus;

    /**
     * @var Source|null
     *
     * @ORM\ManyToOne(targetEntity=Source::class, cascade={"persist"})
     * @ORM\JoinColumn(name="source_code", nullable=true, referencedColumnName="code")
     */
    private $source;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", name="launch_date")
     */
    private $launchDate;
    /**
     * @var LaunchSite
     *
     * @ORM\ManyToOne(targetEntity=LaunchSite::class, cascade={"persist"})
     * @ORM\JoinColumn(name="launch_site_code", nullable=false, referencedColumnName="code")
     */
    private $launchSite;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(type="datetime", nullable=true, name="decay_date")
     */
    private $decayDate;

    /**
     * @var string|null
     *
     * @ORM\Column(type="catalog_entry_orbital_status", nullable=true)
     */
    private $orbitalStatus;

    /**
     * @var OrbitalInformation
     *
     * @ORM\Embedded(class=OrbitalInformation::class)
     */
    private $orbitalInformation;

    public function __construct()
    {
        $this->orbitalInformation = new OrbitalInformation();
    }

    /**
     * @return string
     */
    public function getRaw(): string
    {
        return $this->raw;
    }

    /**
     * @param string $raw
     *
     * @return CatalogEntry
     */
    public function setRaw(string $raw): CatalogEntry
    {
        $this->raw = $raw;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternationalDesignator(): string
    {
        return $this->internationalDesignator;
    }

    /**
     * @param string $internationalDesignator
     *
     * @return CatalogEntry
     */
    public function setInternationalDesignator(string $internationalDesignator): CatalogEntry
    {
        $this->internationalDesignator = $internationalDesignator;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoradCatalogNumber(): string
    {
        return $this->noradCatalogNumber;
    }

    /**
     * @param string $noradCatalogNumber
     *
     * @return CatalogEntry
     */
    public function setNoradCatalogNumber(string $noradCatalogNumber): CatalogEntry
    {
        $this->noradCatalogNumber = $noradCatalogNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getNames(): string
    {
        return $this->names;
    }

    /**
     * @param string $names
     *
     * @return CatalogEntry
     */
    public function setNames(string $names): CatalogEntry
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasPayload(): bool
    {
        return $this->hasPayload;
    }

    /**
     * @param bool $hasPayload
     *
     * @return CatalogEntry
     */
    public function setHasPayload(bool $hasPayload): CatalogEntry
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
     * @return CatalogEntry
     */
    public function setOperationalStatus(?string $operationalStatus): CatalogEntry
    {
        $this->operationalStatus = $operationalStatus;

        return $this;
    }

    /**
     * @return Source|null
     */
    public function getSource(): ?Source
    {
        return $this->source;
    }

    /**
     * @param Source|null $source
     *
     * @return CatalogEntry
     */
    public function setSource(?Source $source): CatalogEntry
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLaunchDate(): DateTime
    {
        return $this->launchDate;
    }

    /**
     * @param DateTime $launchDate
     *
     * @return CatalogEntry
     */
    public function setLaunchDate(DateTime $launchDate): CatalogEntry
    {
        $this->launchDate = $launchDate;

        return $this;
    }

    /**
     * @return LaunchSite
     */
    public function getLaunchSite(): LaunchSite
    {
        return $this->launchSite;
    }

    /**
     * @param LaunchSite $launchSite
     *
     * @return CatalogEntry
     */
    public function setLaunchSite(LaunchSite $launchSite): CatalogEntry
    {
        $this->launchSite = $launchSite;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDecayDate(): ?DateTime
    {
        return $this->decayDate;
    }

    /**
     * @param DateTime|null $decayDate
     *
     * @return CatalogEntry
     */
    public function setDecayDate(?DateTime $decayDate): CatalogEntry
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
     * @return CatalogEntry
     */
    public function setOrbitalStatus(?string $orbitalStatus): CatalogEntry
    {
        $this->orbitalStatus = $orbitalStatus;

        return $this;
    }

    /**
     * @return OrbitalInformation
     */
    public function getOrbitalInformation(): OrbitalInformation
    {
        return $this->orbitalInformation;
    }

    /**
     * @param OrbitalInformation $orbitalInformation
     *
     * @return CatalogEntry
     */
    public function setOrbitalInformation(OrbitalInformation $orbitalInformation): CatalogEntry
    {
        $this->orbitalInformation = $orbitalInformation;

        return $this;
    }
}
