<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity\Abstraction;

interface GUIDEntityInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     *
     * @return GUIDEntityInterface
     */
    public function setId(string $id): GUIDEntityInterface;
}
