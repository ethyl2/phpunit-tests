<?php
# app/RomanNumerals.php

namespace App;

use Exception;



class RomanNumerals
{
  public static function generate($number): string
  {
    if ($number <= 0) {
      throw new Exception('Number is not positive.');
    }
    $romanNumeral = '';
      for ($index = $number; $index > 0; $index--) {
        $romanNumeral .= 'I';
      }

    return $romanNumeral;
  }
}
