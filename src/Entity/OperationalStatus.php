<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity;

use Doctrine\ORM\Mapping as ORM;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityTrait;

/**
 * @ORM\Entity()
 */
class OperationalStatus implements GUIDEntityInterface
{
    use GUIDEntityTrait;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10)
     */
    private $code;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return OperationalStatus
     */
    public function setCode(string $code): OperationalStatus
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return OperationalStatus
     */
    public function setName(string $name): OperationalStatus
    {
        $this->name = $name;

        return $this;
    }
}