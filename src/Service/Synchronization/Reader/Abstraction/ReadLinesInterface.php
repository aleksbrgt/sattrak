<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\Synchronization\Reader\Abstraction;

interface ReadLinesInterface
{
    /**
     * @param string $path
     *
     * @return iterable
     */
    public function read(string $path): iterable;

    /**
     * @param string $path
     *
     * @return bool
     */
    public function supports(string $path): bool;
}
