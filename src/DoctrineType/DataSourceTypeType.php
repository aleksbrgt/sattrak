<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType;

use Hastegan\Sattrak\DoctrineType\Abstraction\AbstractEnumType;
use Hastegan\Sattrak\Enum\Abstraction\EnumInterface;
use Hastegan\Sattrak\Enum\DataSourceTypeEnum;

class DataSourceTypeType extends AbstractEnumType
{
    /**
     * @inheritDoc
     */
    public function getEnum(): EnumInterface
    {
        return new DataSourceTypeEnum();
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'datasource_type';
    }
}