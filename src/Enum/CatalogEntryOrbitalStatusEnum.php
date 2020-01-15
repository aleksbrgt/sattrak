<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Enum;

use Hastegan\Sattrak\Enum\Abstraction\AbstractEnum;

class CatalogEntryOrbitalStatusEnum extends AbstractEnum
{
    public const NO_CURRENT_ELEMENTS = 'NCE';
    public const NO_INITIAL_ELEMENTS = 'NIE';
    public const NO_ELEMENTS_AVAILABLE = 'NEA';
    public const PERMANENTLY_DOCKED = 'DOC';
    public const DOCKED_TO_INTERNATIONAL_SPACE_STATION = 'ISS';
    public const ASTEROID_ORBIT = 'AS0';
    public const ASTEROID_LANDING = 'AS1';
    public const ASTEROID_IMPACT = 'AS2';
    public const ASTEROID_ROUNDTRIP = 'AS3';
    public const EARTH_ORBIT = 'EA0';
    public const EARTH_LANDING = 'EA1';
    public const EARTH_IMPACT = 'EA2';
    public const EARTH_ROUNDTRIP = 'EA3';
    public const EARTH_LAGRANGE_ORBIT = 'EL0';
    public const EARTH_LAGRANGE_LANDING = 'EL1';
    public const EARTH_LAGRANGE_IMPACT = 'EL2';
    public const EARTH_LAGRANGE_ROUNDTRIP = 'EL3';
    public const EARTH_MOON_BARYCENTER_ORBIT = 'EM0';
    public const EARTH_MOON_BARYCENTER_LANDING = 'EM1';
    public const EARTH_MOON_BARYCENTER_IMPACT = 'EM2';
    public const EARTH_MOON_BARYCENTER_ROUNDTRIP = 'EM3';
    public const JUPITER_ORBIT = 'JU0';
    public const JUPITER_LANDING = 'JU1';
    public const JUPITER_IMPACT = 'JU2';
    public const JUPITER_ROUNDTRIP = 'JU3';
    public const MARS_ORBIT = 'MA0';
    public const MARS_LANDING = 'MA1';
    public const MARS_IMPACT = 'MA2';
    public const MARS_ROUNDTRIP = 'MA3';
    public const MERCURY_ORBIT = 'ME0';
    public const MERCURY_LANDING = 'ME1';
    public const MERCURY_IMPACT = 'ME2';
    public const MERCURY_ROUNDTRIP = 'ME3';
    public const MOON_ORBIT = 'MO0';
    public const MOON_LANDING = 'MO1';
    public const MOON_IMPACT = 'MO2';
    public const MOON_ROUNDTRIP = 'MO3';
    public const NEPTUNE_ORBIT = 'NE0';
    public const NEPTUNE_LANDING = 'NE1';
    public const NEPTUNE_IMPACT = 'NE2';
    public const NEPTUNE_ROUNDTRIP = 'NE3';
    public const PLUTO_ORBIT = 'PL0';
    public const PLUTO_LANDING = 'PL1';
    public const PLUTO_IMPACT = 'PL2';
    public const PLUTO_ROUNDTRIP = 'PL3';
    public const SATURN_ORBIT = 'SA0';
    public const SATURN_LANDING = 'SA1';
    public const SATURN_IMPACT = 'SA2';
    public const SATURN_ROUNDTRIP = 'SA3';
    public const SOLAR_SYSTEM_ESCAPE_ORBIT = 'SS0';
    public const SOLAR_SYSTEM_ESCAPE_LANDING = 'SS1';
    public const SOLAR_SYSTEM_ESCAPE_IMPACT = 'SS2';
    public const SOLAR_SYSTEM_ESCAPE_ROUNDTRIP = 'SS3';
    public const SUN_ORBIT = 'SU0';
    public const SUN_LANDING = 'SU1';
    public const SUN_IMPACT = 'SU2';
    public const SUN_ROUNDTRIP = 'SU3';
    public const URANUS_ORBIT = 'UR0';
    public const URANUS_LANDING = 'UR1';
    public const URANUS_IMPACT = 'UR2';
    public const URANUS_ROUNDTRIP = 'UR3';
    public const VENUS_ORBIT = 'VE0';
    public const VENUS_LANDING = 'VE1';
    public const VENUS_IMPACT = 'VE2';
    public const VENUS_ROUNDTRIP = 'VE3';

    /**
     * @inheritDoc
     */
    public function getValues(): array
    {
        return [
            self::NO_CURRENT_ELEMENTS,
            self::NO_INITIAL_ELEMENTS,
            self::NO_ELEMENTS_AVAILABLE,
            self::PERMANENTLY_DOCKED,
            self::DOCKED_TO_INTERNATIONAL_SPACE_STATION,
            self::ASTEROID_ORBIT,
            self::ASTEROID_LANDING,
            self::ASTEROID_IMPACT,
            self::ASTEROID_ROUNDTRIP,
            self::EARTH_ORBIT,
            self::EARTH_LANDING,
            self::EARTH_IMPACT,
            self::EARTH_ROUNDTRIP,
            self::EARTH_LAGRANGE_ORBIT,
            self::EARTH_LAGRANGE_LANDING,
            self::EARTH_LAGRANGE_IMPACT,
            self::EARTH_LAGRANGE_ROUNDTRIP,
            self::EARTH_MOON_BARYCENTER_ORBIT,
            self::EARTH_MOON_BARYCENTER_LANDING,
            self::EARTH_MOON_BARYCENTER_IMPACT,
            self::EARTH_MOON_BARYCENTER_ROUNDTRIP,
            self::JUPITER_ORBIT,
            self::JUPITER_LANDING,
            self::JUPITER_IMPACT,
            self::JUPITER_ROUNDTRIP,
            self::MARS_ORBIT,
            self::MARS_LANDING,
            self::MARS_IMPACT,
            self::MARS_ROUNDTRIP,
            self::MERCURY_ORBIT,
            self::MERCURY_LANDING,
            self::MERCURY_IMPACT,
            self::MERCURY_ROUNDTRIP,
            self::MOON_ORBIT,
            self::MOON_LANDING,
            self::MOON_IMPACT,
            self::MOON_ROUNDTRIP,
            self::NEPTUNE_ORBIT,
            self::NEPTUNE_LANDING,
            self::NEPTUNE_IMPACT,
            self::NEPTUNE_ROUNDTRIP,
            self::PLUTO_ORBIT,
            self::PLUTO_LANDING,
            self::PLUTO_IMPACT,
            self::PLUTO_ROUNDTRIP,
            self::SATURN_ORBIT,
            self::SATURN_LANDING,
            self::SATURN_IMPACT,
            self::SATURN_ROUNDTRIP,
            self::SOLAR_SYSTEM_ESCAPE_ORBIT,
            self::SOLAR_SYSTEM_ESCAPE_LANDING,
            self::SOLAR_SYSTEM_ESCAPE_IMPACT,
            self::SOLAR_SYSTEM_ESCAPE_ROUNDTRIP,
            self::SUN_ORBIT,
            self::SUN_LANDING,
            self::SUN_IMPACT,
            self::SUN_ROUNDTRIP,
            self::URANUS_ORBIT,
            self::URANUS_LANDING,
            self::URANUS_IMPACT,
            self::URANUS_ROUNDTRIP,
            self::VENUS_ORBIT,
            self::VENUS_LANDING,
            self::VENUS_IMPACT,
            self::VENUS_ROUNDTRIP,
        ];
    }
}
