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
        $catalogEntry
            ->setRaw($newEntry->getRaw())
            ->setNames($newEntry->getNames())
            ->setHasPayload($newEntry->hasPayload())
            ->setSource($newEntry->getSource())
            ->setOperationalStatus($newEntry->getOperationalStatus())
            ->setOrbitalStatus($newEntry->getOrbitalStatus())
            ->setOrbitalInformation($newEntry->getOrbitalInformation())
        ;

        if (null === $newEntry->getDecayDate()
            || $newEntry->getDecayDate() !== $catalogEntry->getDecayDate()
        ) {
            return $catalogEntry;
        }

        $catalogEntry->setDecayDate($newEntry->getDecayDate());

        return $catalogEntry;
    }
}
