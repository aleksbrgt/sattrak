<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\EventSubscriber;

use DateTime;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use Exception;
use Hastegan\Sattrak\Entity\Abstraction\TimestampedEntityInterface;

class TimeStampsSubscriber implements EventSubscriber
{
    /**
     * @inheritDoc
     */
    public function getSubscribedEvents()
    {
        return [
            Events::prePersist,
            Events::preUpdate,
        ];
    }

    /**
     * @param LifecycleEventArgs $event
     *
     * @throws Exception
     */
    public function __invoke(LifecycleEventArgs $event)
    {
        $entity = $event->getEntity();

        if (!$entity instanceof TimestampedEntityInterface) {
            return;
        }

        if (!$event->getEntityManager()->contains($entity)) {
            $entity->setCreatedAt(new DateTime());
        }

        $entity->setUpdatedAt(new DateTime());
    }
}
