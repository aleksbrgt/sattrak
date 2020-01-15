<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\CatalogEntry;

use Hastegan\Sattrak\Entity\CatalogEntry;

class MergeCatalogEntries
{
    /**
     * @param CatalogEntry $catalogEntry
     * @param CatalogEntry $newEntry
     *
     * @return CatalogEntry
     */
    public function merge(CatalogEntry $catalogEntry, CatalogEntry $newEntry): CatalogEntry
    {
        return $catalogEntry
            ->setRaw($newEntry->getRaw())
            ->setNames($newEntry->getNames())
            ->setHasPayload($newEntry->hasPayload())
            ->setOperationalStatus($newEntry->getOperationalStatus())
            ->setDecayDate($newEntry->getDecayDate())
            ->setOrbitalStatus($newEntry->getOrbitalStatus())
            ->setOrbitalInformation($newEntry->getOrbitalInformation())
        ;
    }
}
