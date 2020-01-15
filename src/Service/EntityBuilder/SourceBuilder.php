<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\EntityBuilder;

use Hastegan\Sattrak\Entity\Source;

class SourceBuilder
{
    /**
     * @param string $code
     *
     * @return Source
     */
    public function buildFromCode(string $code): Source
    {
        return (new Source())->setCode($code);
    }
}
