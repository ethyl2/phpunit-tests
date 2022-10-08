<?php

namespace Tests\Feature;

use Exception;
use Tests\TestCase;
use App\RomanNumeralConverter;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RomanNumeralsTest extends TestCase
{
    /**
     * A basic feature test example.
     *  @test
     *
     * @return void
     */
    public function test_it_throws_exception_for_negative_numbers()
    {
      $romanNumeralConverter = new RomanNumeralConverter;
      $this->expectException(Exception::class);
      $test = $romanNumeralConverter->generate(-1);
    }

    /**
     * A basic feature test example.
     *  @test
     *
     * @return void
     */
    public function test_it_throws_exception_for_zero()
    {
      $romanNumeralConverter = new RomanNumeralConverter;
      $this->expectException(Exception::class);
      $test = $romanNumeralConverter->generate(0);
    }


    /**
     * A basic feature test example.
     *  @test
     *  @dataProvider correctItems
     * @return void
     */
    public function test_it_generates_the_roman_numeral_for_data_provider_items($input, $output)
    {
        $romanNumeralConverter = new RomanNumeralConverter;
        $this->assertEquals($output, $romanNumeralConverter->generate($input));
    }

    public function correctItems()
    {
      return [
        [1, 'I'],
        [2, 'II'],
        [3, 'III'],
        [4, 'IV'],
        [5, 'V'],
        [9, 'IX'],
        [11, 'XI'],
        [20, 'XX'],
        [29, 'XXIX'],
        [54, 'LIV'],
        [1999, 'MCMXCIX'],
        [2018, 'MMXVIII']
      ];
    }
}

