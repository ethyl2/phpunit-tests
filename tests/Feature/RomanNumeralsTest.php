<?php

namespace Tests\Feature;

use Exception;
use Tests\TestCase;
use App\RomanNumerals;
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
      $this->expectException(Exception::class);
      $test = RomanNumerals::generate(-1);
    }

    /**
     * A basic feature test example.
     *  @test
     *
     * @return void
     */
    public function test_it_throws_exception_for_zero()
    {
      $this->expectException(Exception::class);
      $test = RomanNumerals::generate(0);
    }


    /**
     * A basic feature test example.
     *  @test
     *  @dataProvider correctItems
     * @return void
     */
    public function test_it_generates_the_roman_numeral_for_data_provider_items($input, $output)
    {
        $this->assertEquals($output, RomanNumerals::generate($input));
    }

    public function correctItems()
    {
      return [
        [1, 'I'],
        [2, 'II'],
        [3, 'III']
      ];
    }
}

