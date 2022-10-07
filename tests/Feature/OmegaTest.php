<?php

namespace Tests\Feature;

use Tests\TestCase;

class OmegaTest extends TestCase
{
    /**
     * Find omegas in the omega page.
     *
     * @return void
     */
    public function testFindOmega()
    {
        $response = $this->get('/omega');

        $response->assertStatus(200);

        $response->assertSee('Omega');
        $response->assertSee('Ω Ω Ω Ω Ω Ω Ω Ω Ω');
        $response->assertDontSee('Beta');
        $response->assertDontSee('Alpha');
        var_dump('Ω');
    }
}
