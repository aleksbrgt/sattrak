<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity\Abstraction;

use DateTime;

interface TimestampedEntityInterface
{
    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime;

    /**
     * @param DateTime $dateTime
     *
     * @return TimestampedEntityInterface
     */
    public function setCreatedAt(DateTime $dateTime): TimestampedEntityInterface;

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime;

    /**
     * @param DateTime $dateTime
     *
     * @return TimestampedEntityInterface
     */
    public function setUpdatedAt(DateTime $dateTime): TimestampedEntityInterface;
}