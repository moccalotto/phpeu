<?php

namespace Moccalotto\Eu;

class CountryInfo
{
    protected $aliases = [
        'EL' => 'GR',
        'UK' => 'GB',
    ];

    protected $euCountries = [
        'AT' => 20,
        'BE' => 21,
        'BG' => 20,
        'CY' => 19,
        'CZ' => 21,
        'DE' => 19,
        'DK' => 25,
        'EE' => 20,
        'ES' => 21,
        'FI' => 24,
        'FR' => 20,
        'GB' => 20,
        'GR' => 23,
        'HR' => 25,
        'HU' => 27,
        'IE' => 23,
        'IT' => 22,
        'LT' => 21,
        'LU' => 17,
        'LV' => 21,
        'MT' => 18,
        'NL' => 21,
        'PL' => 23,
        'PT' => 23,
        'RO' => 20,
        'SE' => 25,
        'SI' => 22,
        'SK' => 20,
    ];

    /**
     * Check if a given country is in EU.
     *
     * @param string $alpha2 Country code as ISO_3166-1_alpha-2
     *
     * @return string
     */
    protected function normalizeCountryCode($alpha2)
    {
        $alpha2 = strtoupper($alpha2);

        return $this->aliases[$alpha2] ?? $alpha2;
    }

    /**
     * Check if a given country is in EU.
     *
     * @param string $alpha2 Country code as ISO_3166-1_alpha-2
     *
     * @return bool
     */
    public function isEuMember($alpha2)
    {
        $alpha2 = $this->normalizeCountryCode($alpha2);

        return isset($this->euCountries[$alpha2]);
    }

    /**
     * Get the VAT rate of a given EU country.
     *
     * @param string $alpha2 Country code as ISO_3166-1_alpha-2
     *
     * @return numeric|null
     */
    public function vatRate($alpha2)
    {
        $alpha2 = $this->normalizeCountryCode($alpha2);

        if (! $this->isEuCountry($alpha2)) {
            return;
        }

        return $this->euCountries[$alpha2];
    }
}
