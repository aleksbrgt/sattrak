<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType;

use Hastegan\Sattrak\DoctrineType\Abstraction\AbstractEnumType;
use Hastegan\Sattrak\Enum\Abstraction\EnumInterface;
use Hastegan\Sattrak\Enum\DataSourceProviderEnum;

class DataSourceProviderType extends AbstractEnumType
{
    /**
     * @inheritDoc
     */
    public function getEnum(): EnumInterface
    {
        return new DataSourceProviderEnum();
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'datasource_provider';
    }
}