<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType\Abstraction;

use Doctrine\DBAL\Platforms\AbstractPlatform;

abstract class AbstractVarCharEnumType extends AbstractEnumType
{
    /**
     * @inheritDoc
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'VARCHAR(10)';
    }

    /**
     * @inheritDoc
     */
    protected function getConvertedDBValue($value)
    {
        return $this->existsInEnum($value) ? $value : null;
    }

    /**
     * @inheritDoc
     */
    protected function getConvertedPHPValue($value)
    {
        return $this->existsInEnum($value) ? $value : null;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    private function existsInEnum($value): bool
    {
        return in_array($value, $this->getEnum()->getValues(), true);
    }
}
