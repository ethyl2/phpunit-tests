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

      $this->assertEquals([3], $factors->generate(4));
    }
}
