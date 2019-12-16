<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType;

use Hastegan\Sattrak\DoctrineType\Abstraction\AbstractEnumType;
use Hastegan\Sattrak\Enum\Abstraction\EnumInterface;
use Hastegan\Sattrak\Enum\DataSourceStatusEnum;

class DataSourceStatusType extends AbstractEnumType
{
    /**
     * @inheritDoc
     */
    public function getEnum(): EnumInterface
    {
        return new DataSourceStatusEnum();
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'datasource_status';
    }
}
