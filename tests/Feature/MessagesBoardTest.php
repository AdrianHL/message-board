<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessagesBoardTest extends TestCase
{
    use WithFaker;
    use DatabaseTransactions;

    /** @test */
    public function getMessagesBoard(): void
    {
        $response = $this->getJson('/api/messages', []);

        $response
            ->assertStatus(200)
            ->assertJson([]);
    }

    /** @test */
    public function addMessageToBoard(): void
    {
        $response = $this->postJson('/api/message', [
            'message' => $this->faker->text()
        ]);

        $response
            ->assertStatus(201)
            ->assertJson([]);
    }
}
