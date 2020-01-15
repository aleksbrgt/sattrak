<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Source
{
    /**
     * @var string
     *
     * @ORM\Id()
     * @ORM\Column(type="string", length=10)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @return Source
     */
    public function setCode(string $code): Source
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return Source
     */
    public function setName(?string $name): Source
    {
        $this->name = $name;

        return $this;
    }
}
