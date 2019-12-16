<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Enum\Abstraction;

interface EnumInterface
{
    /**
     * Returns an array of key/values matching the key used in the doctrine type
     * and the human readable value
     *
     * @return array
     */
    public function getValues(): array;

    /**
     * @param int $key
     *
     * @return string|null
     */
    public function getValueForKey(int $key): ?string;

    /**
     * @param string $value
     *
     * @return int|null
     */
    public function getKeyForValue(string $value): ?int;

    /**
     * @param int[]|array $keys
     *
     * @return string[]|array
     */
    public function getValuesForKeys(array $keys): array;

    /**
     * @param string[]|array $values
     *
     * @return int[]|array
     */
    public function getKeysForValues(array $values): array;
}
