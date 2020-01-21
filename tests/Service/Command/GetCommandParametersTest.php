<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Tests\Service\Command;

use Hastegan\Sattrak\Service\Command\GetCommandParameters;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\InputInterface;

class GetCommandParametersTest extends TestCase
{
    private $getCommandParameters;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->getCommandParameters = new GetCommandParameters();
    }

    /**
     * @dataProvider getFromInputProvider
     *
     * @param InputInterface $input
     * @param string $expected
     */
    public function testGetFromInput(InputInterface $input, string $expected): void
    {
        $this->assertEquals(
            $expected,
            $this->getCommandParameters->getFromInput($input)
        );
    }

    /**
     * @return array
     */
    public function getFromInputProvider(): array
    {
        return [
            'no options or arguments' => [
                'input' => $this->getPreparedInputInterface([], []),
                'expected' => '',
            ],
            'some non flag options' => [
                'input' => $this->getPreparedInputInterface(
                    [
                        'foo' => 'bar',
                        'baz' => 'foobar',
                    ],
                    []
                ),
                'expected' => '--foo=bar --baz=foobar',
            ],
            'some flag options, unused flags are ignored' => [
                'input' => $this->getPreparedInputInterface(
                    [
                        'foo' => true,
                        'bar' => false,
                        'baz' => true,
                    ],
                    []
                ),
                'expected' => '--foo --baz',
            ],
            'some arguments, the default command argument is ignored' => [
                'input' => $this->getPreparedInputInterface(
                    [],
                    [
                        'command' => 'lorem:ipsum',
                        'foo' => 'bar',
                        'baz' => 'foobar',
                    ]
                ),
                'expected' => 'bar foobar',
            ],
            'some options and arguments, arguments show up first' => [
                'input' => $this->getPreparedInputInterface(
                    [
                        'foo' => 'bar',
                    ],
                    [
                        'baz' => 'foobar',
                    ]
                ),
                'expected' => 'foobar --foo=bar',
            ],
        ];
    }

    /**
     * @param array $options
     * @param array $arguments
     *
     * @return InputInterface|MockObject
     */
    private function getPreparedInputInterface(
        array $options,
        array $arguments
    ): InputInterface {
        return $this->createConfiguredMock(
            InputInterface::class,
            [
                'getArguments' => $arguments,
                'getOptions' => $options,
            ]
        );
    }
}
