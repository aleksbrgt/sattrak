<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Enum;

use Hastegan\Sattrak\Enum\Abstraction\AbstractEnum;

class DataSourceStatusEnum extends AbstractEnum
{
    public const IMPORT_ENABLED = 'import_enabled';

    public const IMPORT_DISABLED = 'import_disable';

    /**
     * @inheritDoc
     */
    public function getValues(): array
    {
        return [
            1 => self::IMPORT_ENABLED,
            2 => self::IMPORT_DISABLED,
        ];
    }
}
