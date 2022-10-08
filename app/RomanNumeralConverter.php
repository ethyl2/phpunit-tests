<?php
# app/RomanNumeralConverter.php

namespace App;

use Exception;


class RomanNumeralConverter
{

    public $numeralToRoman = [
      0 => [
          0 => '',
          1 => 'I',
          2 => 'II',
          3 => 'III',
          4 => 'IV',
          5 => 'V',
          6 => 'VI',
          7 => 'VII',
          8 => 'VIII',
          9 => 'IX'
      ],
      1 => [
          0 => '',
          1 => 'X',
          2 => 'XX',
          3 => 'XXX',
          4 => 'XL',
          5 => 'L',
          6 => 'LX',
          7 => 'LXX',
          8 => 'LXXX',
          9 => 'XC'
      ],
      2 => [
          0 => '',
          1 => 'C',
          2 => 'CC',
          3 => 'CCC',
          4 => 'CD',
          5 => 'D',
          6 => 'DC',
          7 => 'DCC',
          8 => 'DCCC',
          9 => 'CM'
      ],
      3 => [
          0 => '',
          1 => 'M',
          2 => 'MM',
          3 => 'MMM'
      ]
    ];

    public function generate($number): string
    {
      if ($number <= 0 || $number >= 4000) {
        throw new Exception('Number is out of range.');
      }

      $numberStringArray = array_reverse(str_split(strval($number)));
      $romanNumeral = '';

      foreach ($numberStringArray as $index => $value){
        $romanNumeral = $this->numeralToRoman[$index][$value] . $romanNumeral;
      }

      return $romanNumeral;
    }
}
