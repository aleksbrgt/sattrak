<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\Synchronization\Reader;

use Hastegan\Sattrak\Service\Synchronization\Reader\Abstraction\ReadLinesInterface;
use Hastegan\Sattrak\Service\Synchronization\Reader\Exception\NoSupportedReaderException;

class ReaderFactory
{
    /** @var iterable|ReadLinesInterface[] */
    private $readers;

    /**
     * @param iterable $readers
     */
    public function __construct(iterable $readers)
    {
        $this->readers = $readers;
    }

    /**
     * @param string $path
     *
     * @return ReadLinesInterface
     */
    public function getForPath(string $path): ReadLinesInterface
    {
        foreach ($this->readers as $reader) {
            if ($reader->supports($path)) {
                return $reader;
            }
        }

        throw new NoSupportedReaderException();
    }
}
