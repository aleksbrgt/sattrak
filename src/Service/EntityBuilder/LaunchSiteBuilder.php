<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\EntityBuilder;

use Hastegan\Sattrak\Entity\LaunchSite;

class LaunchSiteBuilder
{
    /**
     * @param string $code
     *
     * @return LaunchSite
     */
    public function buildFromCode(string $code): LaunchSite
    {
        return (new LaunchSite())->setCode($code);
    }
}
