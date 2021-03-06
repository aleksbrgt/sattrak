<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\EventSubscriber;

use Exception;
use Hastegan\Sattrak\Command\Abstraction\TrackCommandInterface;
use Hastegan\Sattrak\Service\Command\CommandHistoryHandler;
use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class TrackCommandSubscriber implements EventSubscriberInterface
{
    /** @var CommandHistoryHandler */
    private $historyHandler;

    public function __construct(
        CommandHistoryHandler $historyHandler
    ) {
        $this->historyHandler = $historyHandler;
    }

    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ConsoleEvents::COMMAND => ['commandStart'],
            ConsoleEvents::TERMINATE => ['commandTerminate'],
            ConsoleEvents::ERROR => ['commandError'],
        ];
    }

    /**
     * @param ConsoleCommandEvent $event
     *
     * @throws Exception
     */
    public function commandStart(ConsoleCommandEvent $event)
    {
        $command = $event->getCommand();

        if (!$command instanceof TrackCommandInterface) {
            return;
        }

        $commandHistory = $this->historyHandler->create($event);
        $command->setCommandHistory($commandHistory);
    }

    /**
     * @param ConsoleTerminateEvent $event
     *
     * @throws Exception
     */
    public function commandTerminate(ConsoleTerminateEvent $event)
    {
        $command = $event->getCommand();

        if (!$command instanceof TrackCommandInterface || !$command->hasCommandHistory()) {
            return;
        }

        $this->historyHandler->updateOnTermination(
            $command->getCommandHistory(),
            $event
        );
    }

    /**
     * @param ConsoleErrorEvent $event
     *
     * @throws Exception
     */
    public function commandError(ConsoleErrorEvent $event)
    {
        $command = $event->getCommand();

        if (!$command instanceof TrackCommandInterface || !$command->hasCommandHistory()) {
            return;
        }

        $this->historyHandler->updateOnError($command->getCommandHistory(), $event);
    }
}
