<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Enum\Abstraction;

abstract class AbstractEnum implements EnumInterface
{
    /**
     * @inheritDoc
     */
    public function getValueForKey(int $key): ?string
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getKeyForValue(string $value): ?int
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getValuesForKeys(array $keys): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getKeysForValues(array $values): array
    {
        return [];
    }
}