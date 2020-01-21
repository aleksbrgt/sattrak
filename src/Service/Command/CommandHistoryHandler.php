<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\Command;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Hastegan\Sattrak\Entity\CommandHistory;
use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;

class CommandHistoryHandler
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var GetCommandParameters */
    private $getParameters;

    public function __construct(
        EntityManagerInterface $entityManager,
        GetCommandParameters $getParameters
    ) {
        $this->entityManager = $entityManager;
        $this->getParameters = $getParameters;
    }

    /**
     * @param ConsoleCommandEvent $event
     *
     * @return CommandHistory
     *
     * @throws Exception
     */
    public function create(ConsoleCommandEvent $event): CommandHistory
    {
        $commandHistory = (new CommandHistory())
            ->setCommandName($event->getCommand()->getName())
            ->setParameters($this->getParameters->getFromInput($event->getInput()))
            ->setStartedAt(new DateTime())
        ;

        $this->entityManager->persist($commandHistory);
        $this->entityManager->flush();

        return $commandHistory;
    }

    /**
     * @param CommandHistory $commandHistory
     * @param ConsoleTerminateEvent $event
     *
     * @return CommandHistory
     *
     * @throws Exception
     */
    public function updateOnTermination(
        CommandHistory $commandHistory,
        ConsoleTerminateEvent $event
    ): CommandHistory {
        // Load the entity to ensure it is actually managed
        // On long commands the entity might be detached at this point
        $commandHistory = $this->reload($commandHistory);

        $commandHistory
            ->setEndedAt(new DateTime())
            ->setCode($event->getExitCode())
        ;

        $this->entityManager->flush();

        return $commandHistory;
    }

    /**
     * @param CommandHistory $commandHistory
     * @param ConsoleErrorEvent $event
     *
     * @return CommandHistory
     *
     * @throws Exception
     */
    public function updateOnError(
        CommandHistory $commandHistory,
        ConsoleErrorEvent $event
    ): CommandHistory {
        // Load the entity to ensure it is actually managed
        // On long commands the entity might be detached at this point
        $commandHistory = $this->reload($commandHistory);

        $commandHistory->setError($event->getError()->getMessage());

        $this->entityManager->flush();

        return $commandHistory;
    }

    /**
     * @param CommandHistory $commandHistory
     *
     * @return CommandHistory
     */
    private function reload(CommandHistory $commandHistory): CommandHistory
    {
        $commandHistory = $this->entityManager->find(
            CommandHistory::class,
            $commandHistory->getId()
        );

        return $commandHistory;
    }
}
