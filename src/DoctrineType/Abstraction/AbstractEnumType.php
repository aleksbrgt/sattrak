<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\DoctrineType\Abstraction;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Hastegan\Sattrak\Enum\Abstraction\EnumInterface;
use UnexpectedValueException;

abstract class AbstractEnumType extends Type
{
    /**
     * @inheritDoc
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (null === $value) {
            return null;
        }

        $convertedValue = $this->getConvertedDBValue($value);

        if (null === $convertedValue) {
            throw new UnexpectedValueException(sprintf(
                'An issue occurred while converting value %s to database value in DoctrineType %s',
                $value,
                get_class($this)
            ));
        }

        return $convertedValue;
    }

    /**
     * @inheritDoc
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value === null) {
            return null;
        }

        $convertedValue = $this->getConvertedPHPValue($value);

        if (null === $convertedValue) {
            throw new UnexpectedValueException(sprintf(
                'An issue occurred while converting value %s to php value in DoctrineType %s',
                $value,
                get_class($this)
            ));
        }

        return $convertedValue;
    }

    /**
     * @inheritDoc
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }

    /**
     * @return EnumInterface
     */
    abstract public function getEnum(): EnumInterface;

    /**
     * @param $value
     *
     * @return mixed|null
     */
    abstract protected function getConvertedDBValue($value);

    /**
     * @param $value
     *
     * @return mixed|null
     */
    abstract protected function getConvertedPHPValue($value);
}
