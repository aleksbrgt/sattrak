<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType;

use Hastegan\Sattrak\DoctrineType\Abstraction\AbstractVarCharEnumType;
use Hastegan\Sattrak\Enum\Abstraction\EnumInterface;
use Hastegan\Sattrak\Enum\CatalogEntryOrbitalStatusEnum;

class CatalogEntryOrbitalStatusType extends AbstractVarCharEnumType
{
    /**
     * @inheritDoc
     */
    public function getEnum(): EnumInterface
    {
        return new CatalogEntryOrbitalStatusEnum();
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'catalog_entry_orbital_status';
    }
}
