<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Command\Abstraction;

use Hastegan\Sattrak\Entity\CommandHistory;
use Symfony\Component\Console\Command\Command;

abstract class AbstractTrackCommand extends Command implements TrackCommandInterface
{
    /** @var CommandHistory */
    private $commandHistory;

    /**
     * @inheritDoc
     */
    public function getCommandHistory(): CommandHistory
    {
        return $this->commandHistory;
    }

    /**
     * @inheritDoc
     */
    public function setCommandHistory(CommandHistory $commandHistory): TrackCommandInterface
    {
        $this->commandHistory = $commandHistory;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function hasCommandHistory(): bool
    {
        return null !== $this->commandHistory;
    }
}
