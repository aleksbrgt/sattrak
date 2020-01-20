<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Enum;

use Hastegan\Sattrak\Enum\Abstraction\AbstractEnum;

class CatalogEntryOperationalStatusEnum extends AbstractEnum
{
    public const OPERATIONAL = '+';
    public const NON_OPERATIONAL = '-';
    public const PARTIALLY_OPERATIONAL = 'P';
    public const BACKUP_STANDBY = 'B';
    public const SPARE = 'S';
    public const EXTENDED_MISSION = 'X';
    public const DECAYED = 'D';
    public const UNKNOWN = '?';
    public const ACTIVE = 'U';

    /**
     * @inheritDoc
     */
    public function getValues(): array
    {
        return [
            self::OPERATIONAL,
            self::NON_OPERATIONAL,
            self::PARTIALLY_OPERATIONAL,
            self::BACKUP_STANDBY,
            self::SPARE,
            self::EXTENDED_MISSION,
            self::DECAYED,
            self::UNKNOWN,
            self::ACTIVE,
        ];
    }
}
