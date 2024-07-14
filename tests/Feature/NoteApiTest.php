<?php

namespace Tests\Feature;

use App\Models\Note;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class NoteApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->token = auth('api')->login($this->user);
    }

    /** @test */
    public function it_can_register_a_user()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ];

        $response = $this->postJson('/api/register', $data);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'status',
                'message',
                'user' => [
                    'id',
                    'name',
                    'email',
                ],
                'authorisation' => [
                    'token',
                    'type',
                ],
            ]);
    }

    /** @test */
    public function it_can_login_a_user()
    {
        $data = [
            'email' => $this->user->email,
            'password' => $this->user->real_password,
        ];

        $response = $this->postJson('/api/login', $data);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'user',
                'authorisation' => [
                    'token',
                    'type',
                ],
            ]);
    }

    /** @test */
    public function it_can_logout_a_user()
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->postJson('/api/logout');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
            ]);
    }

    /** @test */
    public function it_can_create_a_note()
    {
        $data = [
            'name' => 'Test note name',
            'description' => 'Test note description.',
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->postJson('/api/notes', $data);

        $response->assertStatus(201)
            ->assertJsonStructure(['note' => ['id', 'name', 'description', 'user_id']]);
    }

    /** @test */
    public function it_can_get_all_notes()
    {
        Note::factory()->count(5)->create(['user_id' => $this->user->id]);

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->getJson('/api/notes');

        $response->assertStatus(200)
            ->assertJsonStructure(['notes']);
    }

    /** @test */
    public function it_can_get_a_single_note()
    {
        $note = Note::factory()->create(['user_id' => $this->user->id]);

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->getJson('/api/notes/' . $note->id);

        $response->assertStatus(200)
            ->assertJsonStructure(['note' => ['id', 'name', 'description', 'user_id']]);
    }

    /** @test */
    public function it_can_update_a_note()
    {
        $note = Note::factory()->create(['user_id' => $this->user->id]);

        $data = [
            'name' => 'Updated test note name',
            'description' => 'Updated test note description.',
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->putJson('/api/notes/' . $note->id, $data);

        $response->assertStatus(200)
            ->assertJsonStructure(['note' => ['id', 'name', 'description', 'user_id']]);
    }

    /** @test */
    public function it_can_delete_a_note()
    {
        $note = Note::factory()->create(['user_id' => $this->user->id]);

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->deleteJson('/api/notes/' . $note->id);

        $response->assertStatus(204);
    }
}
