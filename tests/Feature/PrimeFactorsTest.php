<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\PrimeFactors;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PrimeFactorsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function test_it_generates_prime_factors_for_1()
    {
      $factors = new PrimeFactors;

      $this->assertEquals([], $factors->generate(1));
    }

    function test_it_generates_prime_factors_for_2()
    {
      $factors = new PrimeFactors;

      $this->assertEquals([2], $factors->generate(2));
    }

    function test_it_generates_prime_factors_for_3()
    {
      $factors = new PrimeFactors;

      $this->assertEquals([3], $factors->generate(3));
    }

    function test_it_generates_prime_factors_for_4()
    {
      $factors = new PrimeFactors;

      $this->assertEquals([2,2], $factors->generate(4));
    }

    function test_it_generates_prime_factors_for_8()
    {
      $factors = new PrimeFactors;

      $this->assertEquals([2,2,2], $factors->generate(8));
    }

    function test_it_generates_prime_factors_for_100()
    {
      $factors = new PrimeFactors;

      $this->assertEquals([2,2,5,5], $factors->generate(100));
    }

    /**
     * A basic feature test example.
     *  @test
     *  @dataProvider factors
     * @return void
     */
    public function testWithDataProvider($output, $input)
    {
        $factors = new PrimeFactors;
        // var_dump($input);
        $this->assertEquals($output, $factors->generate($input));
    }

    /**
     * A basic feature test example.
     *  @test
     *  @dataProvider factors
     * @return void
     */
    public function test2WithDataProvider($output, $input)
    {
        $factors = new PrimeFactors;

        $this->assertEquals($output, $factors->generate2($input));
    }

    public function factors()
    {
      return[
        [[], 1],
        [[2], 2],
        [[3], 3],
        [[2,2], 4],
        [[5], 5],
        [[2,3], 6],
        [[2,2,2], 8],
        [[2,2,5,5], 100],
        [[3,3,3,37], 999],
      ];
    }

}
