<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Hastegan\Sattrak\Entity\CatalogEntry;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CatalogEntry|null findOneBy(array $criteria, array $orderBy = null)
 */
class CatalogEntryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CatalogEntry::class);
    }
}
