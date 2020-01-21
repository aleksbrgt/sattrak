<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\Command;

use Symfony\Component\Console\Input\InputInterface;

class GetCommandParameters
{
    public function getFromInput(InputInterface $input): string
    {
        $parameters = [];

        foreach ($input->getArguments() as $name => $value) {
            if ('command' === $name) {
                continue;
            }

            $parameters[] = $value;
        }

        foreach ($input->getOptions() as $name => $value) {
            if ($value === true) {
                $parameters[] = sprintf('--%s', $name);

                continue;
            }

            if ($value === false) {
                continue;
            }

            $parameters[] = sprintf('--%s=%s', $name, $value);
        }

        return join(' ', $parameters);
    }
}
