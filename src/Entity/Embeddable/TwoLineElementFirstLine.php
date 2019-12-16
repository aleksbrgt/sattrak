<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity\Embeddable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class TwoLineElementFirstLine
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=4, name="epoch_year")
     */

    private $epochYear;
    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=11, scale=8, name="epoch_day")
     */
    private $epochDay;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=9, scale=8, name="first_time_mean_motion_derivative")
     */
    private $firstTimeMeanMotionDerivative;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=9, scale=8, name="second_time_mean_motion_derivative")
     */
    private $secondTimeMeanMotionDerivative;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=10, scale=9)
     */
    private $drag;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", name="set_number")
     */
    private $setNumber;
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $checksum;

    /**
     * @return string
     */
    public function getEpochYear(): string
    {
        return $this->epochYear;
    }

    /**
     * @param string $epochYear
     *
     * @return TwoLineElementFirstLine
     */
    public function setEpochYear(string $epochYear): TwoLineElementFirstLine
    {
        $this->epochYear = $epochYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getEpochDay(): string
    {
        return $this->epochDay;
    }

    /**
     * @param string $epochDay
     *
     * @return TwoLineElementFirstLine
     */
    public function setEpochDay(string $epochDay): TwoLineElementFirstLine
    {
        $this->epochDay = $epochDay;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstTimeMeanMotionDerivative(): string
    {
        return $this->firstTimeMeanMotionDerivative;
    }

    /**
     * @param string $firstTimeMeanMotionDerivative
     *
     * @return TwoLineElementFirstLine
     */
    public function setFirstTimeMeanMotionDerivative(string $firstTimeMeanMotionDerivative): TwoLineElementFirstLine
    {
        $this->firstTimeMeanMotionDerivative = $firstTimeMeanMotionDerivative;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecondTimeMeanMotionDerivative(): string
    {
        return $this->secondTimeMeanMotionDerivative;
    }

    /**
     * @param string $secondTimeMeanMotionDerivative
     *
     * @return TwoLineElementFirstLine
     */
    public function setSecondTimeMeanMotionDerivative(string $secondTimeMeanMotionDerivative): TwoLineElementFirstLine
    {
        $this->secondTimeMeanMotionDerivative = $secondTimeMeanMotionDerivative;

        return $this;
    }

    /**
     * @return string
     */
    public function getDrag(): string
    {
        return $this->drag;
    }

    /**
     * @param string $drag
     *
     * @return TwoLineElementFirstLine
     */
    public function setDrag(string $drag): TwoLineElementFirstLine
    {
        $this->drag = $drag;

        return $this;
    }

    /**
     * @return int
     */
    public function getSetNumber(): int
    {
        return $this->setNumber;
    }

    /**
     * @param int $setNumber
     *
     * @return TwoLineElementFirstLine
     */
    public function setSetNumber(int $setNumber): TwoLineElementFirstLine
    {
        $this->setNumber = $setNumber;

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
     * @return TwoLineElementFirstLine
     */
    public function setChecksum(int $checksum): TwoLineElementFirstLine
    {
        $this->checksum = $checksum;

        return $this;
    }
}
