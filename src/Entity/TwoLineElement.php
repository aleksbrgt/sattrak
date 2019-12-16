<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity;

use Doctrine\ORM\Mapping as ORM;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityTrait;
use Hastegan\Sattrak\Entity\Abstraction\TimestampedEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\TimeStampedEntityTrait;
use Hastegan\Sattrak\Entity\Embeddable\TwoLineElementFirstLine;
use Hastegan\Sattrak\Entity\Embeddable\TwoLineElementSecondLine;

/**
 * @ORM\Entity()
 */
class TwoLineElement implements GUIDEntityInterface, TimestampedEntityInterface
{
    use GUIDEntityTrait, TimeStampedEntityTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $raw;

    /**
     * @var CatalogEntry
     *
     * @ORM\ManyToOne(targetEntity=CatalogEntry::class)
     * @ORM\JoinColumn(name="catalog_entry_id", nullable=false)
     */
    private $catalogEntry;

    /**
     * @var TwoLineElementFirstLine
     *
     * @ORM\Embedded(class=TwoLineElementFirstLine::class, columnPrefix="first_line_")
     */
    private $firstLine;

    /**
     * @var TwoLineElementSecondLine
     *
     * @ORM\Embedded(class=TwoLineElementSecondLine::class, columnPrefix="second_line_")
     */
    private $secondLine;

    public function __construct()
    {
        $this->firstLine = new TwoLineElementFirstLine();
        $this->secondLine = new TwoLineElementSecondLine();
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
     * @return TwoLineElement
     */
    public function setRaw(string $raw): TwoLineElement
    {
        $this->raw = $raw;

        return $this;
    }

    /**
     * @return CatalogEntry
     */
    public function getCatalogEntry(): CatalogEntry
    {
        return $this->catalogEntry;
    }

    /**
     * @param CatalogEntry $catalogEntry
     *
     * @return TwoLineElement
     */
    public function setCatalogEntry(CatalogEntry $catalogEntry): TwoLineElement
    {
        $this->catalogEntry = $catalogEntry;

        return $this;
    }

    /**
     * @return TwoLineElementFirstLine
     */
    public function getFirstLine(): TwoLineElementFirstLine
    {
        return $this->firstLine;
    }

    /**
     * @param TwoLineElementFirstLine $firstLine
     *
     * @return TwoLineElement
     */
    public function setFirstLine(TwoLineElementFirstLine $firstLine): TwoLineElement
    {
        $this->firstLine = $firstLine;

        return $this;
    }

    /**
     * @return TwoLineElementSecondLine
     */
    public function getSecondLine(): TwoLineElementSecondLine
    {
        return $this->secondLine;
    }

    /**
     * @param TwoLineElementSecondLine $secondLine
     *
     * @return TwoLineElement
     */
    public function setSecondLine(TwoLineElementSecondLine $secondLine): TwoLineElement
    {
        $this->secondLine = $secondLine;

        return $this;
    }
}