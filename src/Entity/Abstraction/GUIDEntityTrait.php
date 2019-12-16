<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity\Abstraction;

trait GUIDEntityTrait
{
    /**
     * @var string
     *
     * @ORM\Id()
     * @ORM\Column(type="guid", unique=true)
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return GUIDEntityInterface|GUIDEntityTrait
     */
    public function setId(string $id): GUIDEntityInterface
    {
        $this->id = $id;

        return $this;
    }
}
