<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomePageTest extends TestCase
{
    use RefreshDatabase;
    
    /** @group pages */
    public function testWelcomePageCanBeVisited()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
