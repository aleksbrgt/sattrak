<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityInterface;
use Hastegan\Sattrak\Entity\Abstraction\GUIDEntityTrait;

/**
 * @ORM\Entity()
 */
class CommandHistory implements GUIDEntityInterface
{
    use GUIDEntityTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $commandName;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $parameters;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $startedAt;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endedAt;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $error;

    /**
     * @return string
     */
    public function getCommandName(): string
    {
        return $this->commandName;
    }

    /**
     * @param string $commandName
     *
     * @return CommandHistory
     */
    public function setCommandName(string $commandName): CommandHistory
    {
        $this->commandName = $commandName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getParameters(): ?string
    {
        return $this->parameters;
    }

    /**
     * @param string|null $parameters
     *
     * @return CommandHistory
     */
    public function setParameters(?string $parameters): CommandHistory
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartedAt(): DateTime
    {
        return $this->startedAt;
    }

    /**
     * @param DateTime $startedAt
     *
     * @return CommandHistory
     */
    public function setStartedAt(DateTime $startedAt): CommandHistory
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getEndedAt(): ?DateTime
    {
        return $this->endedAt;
    }

    /**
     * @param DateTime|null $endedAt
     *
     * @return CommandHistory
     */
    public function setEndedAt(?DateTime $endedAt): CommandHistory
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int|null $code
     *
     * @return CommandHistory
     */
    public function setCode(?int $code): CommandHistory
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string|null $error
     *
     * @return CommandHistory
     */
    public function setError(?string $error): CommandHistory
    {
        $this->error = $error;

        return $this;
    }
}
