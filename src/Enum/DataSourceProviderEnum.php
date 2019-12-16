<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Enum;

use Hastegan\Sattrak\Enum\Abstraction\AbstractEnum;

class DataSourceProviderEnum extends AbstractEnum
{
    public const CELESTRAK = 'celestrak';

    /**
     * @inheritDoc
     */
    public function getValues(): array
    {
        return [
            1 => self::CELESTRAK,
        ];
    }
}