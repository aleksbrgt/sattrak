<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class LaunchSite
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
     * @return LaunchSite
     */
    public function setCode(string $code): LaunchSite
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
     * @return LaunchSite
     */
    public function setName(?string $name): LaunchSite
    {
        $this->name = $name;

        return $this;
    }
}
