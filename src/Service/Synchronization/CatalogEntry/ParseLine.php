<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Service\Synchronization\CatalogEntry;

use Hastegan\Sattrak\DTO\CatalogEntryDTO;

class ParseLine
{
    /**
     * @param string $line
     *
     * @return CatalogEntryDTO
     */
    public function parse(string $line): CatalogEntryDTO
    {
        $line = trim($line);

        $apogeeStr = $this->extract($line, 103, 7);
        $apogee = null;
        if (ctype_digit($apogeeStr)) {
            $apogee = (int) $apogeeStr;
        }

        $perigeeStr = $this->extract($line, 110, 7);
        $perigee = null;
        if (ctype_digit($perigeeStr)) {
            $perigee = (int) $perigeeStr;
        }

        $entryDto = (new CatalogEntryDTO())
            ->setRaw($line)
            ->setInternalDesignator($this->extract($line, 0, 11))
            ->setNoradCatalogNumber($this->extract($line, 13, 5))
            ->setNames($this->extract($line, 23, 23))
            ->setHasPayload($this->extract($line, 20, 1) === '*')
            ->setOperationalStatus($this->extract($line, 21, 1))
            ->setOrbitalStatus($this->extract($line, 129, 3))
            ->setSource($this->extract($line, 49, 5))
            ->setLaunchDate($this->extract($line, 56, 10))
            ->setLaunchSite($this->extract($line, 68, 5))
            ->setDecayDate($this->extract($line, 75, 10))
            ->setOrbitalPeriod($this->extract($line, 87, 7))
            ->setInclination($this->extract($line, 96, 5))
            ->setApogee($apogee)
            ->setPerigee($perigee)
            ->setRadarCrossSection($this->extract($line, 119, 8))
        ;

        return $entryDto;
    }

    /**
     * @param string $line
     * @param int $start
     * @param int $length
     * @param bool $nullable
     *
     * @return string|null
     */
    private function extract(string $line, int $start, int $length, ?bool $nullable = true): ?string
    {
        $value = substr($line, $start, $length);

        if (false === $value) {
            return null;
        }

        $value = trim($value);

        if ($nullable && empty($value)) {
            return null;
        }

        return $value;
    }
}
