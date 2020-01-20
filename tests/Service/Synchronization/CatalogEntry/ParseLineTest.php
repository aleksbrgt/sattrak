<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Tests\Service\Synchronization\CatalogEntry;

use Hastegan\Sattrak\DTO\CatalogEntryDTO;
use Hastegan\Sattrak\Service\Synchronization\CatalogEntry\ParseLine;
use PHPUnit\Framework\TestCase;

class ParseLineTest extends TestCase
{
    private $parseLine;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->parseLine = new ParseLine();
    }

    /**
     * @dataProvider parseProvider
     *
     * @param string $line
     * @param CatalogEntryDTO $expected
     */
    public function testParse(string $line, CatalogEntryDTO $expected): void
    {
        $this->assertEquals(
            $expected,
            $this->parseLine->parse($line)
        );
    }

    /**
     * @return array
     */
    public function parseProvider(): array
    {
        return [
            'empty line' =>  [
                'line' => '',
                'expected' => new CatalogEntryDTO(),
            ],
            'all elements are present and nominal' => [
                'line' => '1962-033B    00347  *D SL-3 R/B                  CIS    1962-07-28  TYMSC  1962-08-21     87.8   64.9     164     165     N/A    FOO',
                'expected' => (new CatalogEntryDTO())
                    ->setRaw('1962-033B    00347  *D SL-3 R/B                  CIS    1962-07-28  TYMSC  1962-08-21     87.8   64.9     164     165     N/A    FOO')
                    ->setInternalDesignator('1962-033B')
                    ->setNoradCatalogNumber('00347')
                    ->setNames('SL-3 R/B')
                    ->setHasPayload(true)
                    ->setOperationalStatus('D')
                    ->setSource('CIS')
                    ->setLaunchDate('1962-07-28')
                    ->setLaunchSite('TYMSC')
                    ->setDecayDate('1962-08-21')
                    ->setOrbitalPeriod('87.8')
                    ->setInclination('64.9')
                    ->setApogee(164)
                    ->setPerigee(165)
                    ->setRadarCrossSection('N/A')
                    ->setOrbitalStatus('FOO')
            ],
            'integer values are not valid integers, their values should be set to null' => [
                'line' => '1962-033B    00347  *D SL-3 R/B                  CIS    1962-07-28  TYMSC  1962-08-21     87.8   64.9     aaa     aaa     N/A    FOO',
                'expected' => (new CatalogEntryDTO())
                    ->setRaw('1962-033B    00347  *D SL-3 R/B                  CIS    1962-07-28  TYMSC  1962-08-21     87.8   64.9     aaa     aaa     N/A    FOO')
                    ->setInternalDesignator('1962-033B')
                    ->setNoradCatalogNumber('00347')
                    ->setNames('SL-3 R/B')
                    ->setHasPayload(true)
                    ->setOperationalStatus('D')
                    ->setSource('CIS')
                    ->setLaunchDate('1962-07-28')
                    ->setLaunchSite('TYMSC')
                    ->setDecayDate('1962-08-21')
                    ->setOrbitalPeriod('87.8')
                    ->setInclination('64.9')
                    ->setApogee(null)
                    ->setPerigee(null)
                    ->setRadarCrossSection('N/A')
                    ->setOrbitalStatus('FOO')
            ]
        ];
    }
}
