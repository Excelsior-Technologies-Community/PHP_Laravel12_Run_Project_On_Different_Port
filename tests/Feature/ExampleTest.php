<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_dashboard_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('dashboard');
    }

    /**
     * Test the enhanced status endpoint returns required fields.
     */
    public function test_the_status_endpoint_returns_comprehensive_data(): void
    {
        $response = $this->get('/status');

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'OK',
            ])
            ->assertJsonStructure([
                'status',
                'port',
                'host',
                'environment',
                'debug',
                'laravel_version',
                'php_version',
                'app_name',
                'app_url',
                'name_servers',
                'uptime',
                'cache_driver',
                'queue_connection',
                'session_driver',
                'timezone',
            ]);
    }
}
