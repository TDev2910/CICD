<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_create_customer()
    {
        $response = $this->postJson('/api/customers', [
            'name' => 'Nguyen Van A',
            'email' => 'a@gmail.com'
        ]);

        $response->assertStatus(201)
            ->assertJson(['message' => 'Customer created']);
    }
}
