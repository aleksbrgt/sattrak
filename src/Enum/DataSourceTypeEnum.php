<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Enum;

use Hastegan\Sattrak\Enum\Abstraction\AbstractEnum;

class DataSourceTypeEnum extends AbstractEnum
{
    public const TLE = 'tle';

    public const CATALOG_ENTRY = 'catalog';

    public function getValues(): array
    {
        return [
            1 => self::TLE,
            2 => self::CATALOG_ENTRY,
        ];
    }
}