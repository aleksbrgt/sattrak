<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType\Abstraction;

use Doctrine\DBAL\Platforms\AbstractPlatform;

abstract class AbstractIntEnumTypeType extends AbstractEnumType
{
    /**
     * @inheritDoc
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform): string
    {
        return 'SMALLINT';
    }

    /**
     * @inheritDoc
     */
    protected function getConvertedDBValue($value)
    {
        return $this->getEnum()->getKeyForValue($value);
    }

    /**
     * @inheritDoc
     */
    protected function getConvertedPHPValue($value)
    {
        return $this->getEnum()->getValueForKey($value);
    }
}
