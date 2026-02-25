<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskCreationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_create_a_task() 
    {
        $this->postJson('/api/tasks', ['title' => 'Test'])
            ->assertStatus(201)
            ->assertJson(['status' => 'success']);
    }
}
