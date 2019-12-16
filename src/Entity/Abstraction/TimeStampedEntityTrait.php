<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity\Abstraction;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait TimeStampedEntityTrait
{
    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", name="created_at")
     */
    private $createdAt;
    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", name="updated_at")
     */
    private $updatedAt;

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return TimestampedEntityInterface|TimeStampedEntityTrait
     */
    public function setCreatedAt(DateTime $createdAt): TimestampedEntityInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *
     * @return TimestampedEntityInterface|TimeStampedEntityTrait
     */
    public function setUpdatedAt(DateTime $updatedAt): TimestampedEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
