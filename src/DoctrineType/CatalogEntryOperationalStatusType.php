<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType;

use Hastegan\Sattrak\DoctrineType\Abstraction\AbstractVarCharEnumType;
use Hastegan\Sattrak\Enum\Abstraction\EnumInterface;
use Hastegan\Sattrak\Enum\CatalogEntryOperationalStatusEnum;

class CatalogEntryOperationalStatusType extends AbstractVarCharEnumType
{
    /**
     * @inheritDoc
     */
    public function getEnum(): EnumInterface
    {
        return new CatalogEntryOperationalStatusEnum();
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'catalog_entry_operational_status';
    }
}
