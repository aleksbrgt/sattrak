<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class OrbitalInformation
{
    /**
     * @var string|null
     *
     * @ORM\Column(
     *     type="decimal",
     *     precision=6,
     *     scale=5,
     *     nullable=true,
     *     name="orbital_period"
     * )
     */
    private $orbitalPeriod;

    /**
     * @var string|null
     *
     * @ORM\Column(
     *     type="decimal",
     *     precision=4,
     *     scale=1,
     *     nullable=true
     * )
     */
    private $inclination;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $apogee;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $perigee;

    /**
     * @var string
     *
     * @ORM\Column(
     *     type="decimal",
     *     precision=7,
     *     scale=4,
     *     nullable=true,
     *     name="radar_cross_section"
     * )
     */
    private $radarCrossSection;

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
     * @return OrbitalInformation
     */
    public function setOrbitalPeriod(?string $orbitalPeriod): OrbitalInformation
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
     * @return OrbitalInformation
     */
    public function setInclination(?string $inclination): OrbitalInformation
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
     * @return OrbitalInformation
     */
    public function setApogee(?int $apogee): OrbitalInformation
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
     * @return OrbitalInformation
     */
    public function setPerigee(?int $perigee): OrbitalInformation
    {
        $this->perigee = $perigee;

        return $this;
    }

    /**
     * @return string
     */
    public function getRadarCrossSection(): string
    {
        return $this->radarCrossSection;
    }

    /**
     * @param string $radarCrossSection
     *
     * @return OrbitalInformation
     */
    public function setRadarCrossSection(string $radarCrossSection): OrbitalInformation
    {
        $this->radarCrossSection = $radarCrossSection;

        return $this;
    }
}
