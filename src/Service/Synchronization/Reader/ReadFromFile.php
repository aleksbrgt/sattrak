<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\Synchronization\Reader;

use Hastegan\Sattrak\Service\Synchronization\Reader\Abstraction\ReadLinesInterface;
use RuntimeException;

class ReadFromFile implements ReadLinesInterface
{
    /**
     * @inheritDoc
     */
    public function read(string $path): iterable
    {
        $handle = fopen($path, 'r');
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                yield $line;
            }

            fclose($handle);
        } else {
            throw new RuntimeException(error_get_last());
        }
    }

    /**
     * @inheritDoc
     */
    public function supports(string $path): bool
    {
        return true;
    }
}
