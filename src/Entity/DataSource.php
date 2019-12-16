<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityTrait;
use Hastegan\Sattrak\Entity\Abstraction\TimestampedEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\TimeStampedEntityTrait;

/**
 * @ORM\Entity()
 */
class DataSource implements GUIDEntityInterface, TimestampedEntityInterface
{
    use GUIDEntityTrait, TimeStampedEntityTrait;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="datasource_provider")
     */
    private $provider;

    /**
     * @var string
     *
     * @ORM\Column(type="datasource_type")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(type="datasource_status")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $url;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", name="last_checked")
     */
    private $lastChecked;

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
     * @return DataSource
     */
    public function setName(string $name): DataSource
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return DataSource
     */
    public function setDescription(?string $description): DataSource
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * @param string $provider
     *
     * @return DataSource
     */
    public function setProvider(string $provider): DataSource
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return DataSource
     */
    public function setType(string $type): DataSource
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return DataSource
     */
    public function setStatus(string $status): DataSource
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return DataSource
     */
    public function setUrl(string $url): DataSource
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastChecked(): DateTime
    {
        return $this->lastChecked;
    }

    /**
     * @param DateTime $lastChecked
     *
     * @return DataSource
     */
    public function setLastChecked(DateTime $lastChecked): DataSource
    {
        $this->lastChecked = $lastChecked;

        return $this;
    }
}
