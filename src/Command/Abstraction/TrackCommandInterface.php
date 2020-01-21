<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Command\Abstraction;

use Hastegan\Sattrak\Entity\CommandHistory;

interface TrackCommandInterface
{
    /**
     * @return CommandHistory
     */
    public function getCommandHistory(): CommandHistory;

    /**
     * @param CommandHistory $commandHistory
     *
     * @return TrackCommandInterface
     */
    public function setCommandHistory(CommandHistory $commandHistory): TrackCommandInterface;

    /**
     * @return bool
     */
    public function hasCommandHistory(): bool;
}
