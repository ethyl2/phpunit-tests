<?php
# app/PrimeFactors.php

namespace App;

class PrimeFactors
{

    /**
     * Construct the box with the given items.
     *
     * @param array $items
     */
    public function __construct()
    {

    }

    public function generate($number): array
    {
        if ($number > 1) {
          return [$number];
        }
        return [];
    }
}
