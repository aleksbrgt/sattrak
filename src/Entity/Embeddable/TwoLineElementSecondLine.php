<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class TwoLineElementSecondLine
{
    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=7, scale=4)
     */
    private $inclination;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=7, scale=4, name="ascending_node")
     */
    private $ascendingNode;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=8, scale=7)
     */
    private $eccentricity;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=7, scale=4, name="argument_of_perigee")
     */
    private $argumentOfPerigee;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=7, scale=4, name="mean_anomaly")
     */
    private $meanAnomaly;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=10, scale=8, name="mean_motion")
     */
    private $meanMotion;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", name="revolution_number")
     */
    private $revolutionNumber;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $checksum;

    /**
     * @return string
     */
    public function getInclination(): string
    {
        return $this->inclination;
    }

    /**
     * @param string $inclination
     *
     * @return TwoLineElementSecondLine
     */
    public function setInclination(string $inclination): TwoLineElementSecondLine
    {
        $this->inclination = $inclination;

        return $this;
    }

    /**
     * @return string
     */
    public function getAscendingNode(): string
    {
        return $this->ascendingNode;
    }

    /**
     * @param string $ascendingNode
     *
     * @return TwoLineElementSecondLine
     */
    public function setAscendingNode(string $ascendingNode): TwoLineElementSecondLine
    {
        $this->ascendingNode = $ascendingNode;

        return $this;
    }

    /**
     * @return string
     */
    public function getEccentricity(): string
    {
        return $this->eccentricity;
    }

    /**
     * @param string $eccentricity
     *
     * @return TwoLineElementSecondLine
     */
    public function setEccentricity(string $eccentricity): TwoLineElementSecondLine
    {
        $this->eccentricity = $eccentricity;

        return $this;
    }

    /**
     * @return string
     */
    public function getArgumentOfPerigee(): string
    {
        return $this->argumentOfPerigee;
    }

    /**
     * @param string $argumentOfPerigee
     *
     * @return TwoLineElementSecondLine
     */
    public function setArgumentOfPerigee(string $argumentOfPerigee): TwoLineElementSecondLine
    {
        $this->argumentOfPerigee = $argumentOfPerigee;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeanAnomaly(): string
    {
        return $this->meanAnomaly;
    }

    /**
     * @param string $meanAnomaly
     *
     * @return TwoLineElementSecondLine
     */
    public function setMeanAnomaly(string $meanAnomaly): TwoLineElementSecondLine
    {
        $this->meanAnomaly = $meanAnomaly;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeanMotion(): string
    {
        return $this->meanMotion;
    }

    /**
     * @param string $meanMotion
     *
     * @return TwoLineElementSecondLine
     */
    public function setMeanMotion(string $meanMotion): TwoLineElementSecondLine
    {
        $this->meanMotion = $meanMotion;

        return $this;
    }

    /**
     * @return int
     */
    public function getRevolutionNumber(): int
    {
        return $this->revolutionNumber;
    }

    /**
     * @param int $revolutionNumber
     *
     * @return TwoLineElementSecondLine
     */
    public function setRevolutionNumber(int $revolutionNumber): TwoLineElementSecondLine
    {
        $this->revolutionNumber = $revolutionNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getChecksum(): int
    {
        return $this->checksum;
    }

    /**
     * @param int $checksum
     *
     * @return TwoLineElementSecondLine
     */
    public function setChecksum(int $checksum): TwoLineElementSecondLine
    {
        $this->checksum = $checksum;

        return $this;
    }
}
