<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use App\Domain\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_logout(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('api');

        $response = $this->withToken($token->plainTextToken)
            ->postJson('/api/sign-out');

        $response->assertStatus(204);
    }

    public function test_token_is_deleted_after_logout(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('api');

        $this->withToken($token->plainTextToken)
            ->postJson('/api/sign-out');

        $this->assertDatabaseMissing('personal_access_tokens', [
            'tokenable_id' => $user->id,
            'name' => 'api',
        ]);
    }

    public function test_logout_fails_without_token(): void
    {
        $response = $this->postJson('/api/sign-out');

        $response->assertStatus(401);
    }

    public function test_token_cannot_be_used_after_logout(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('api');

        $this->withToken($token->plainTextToken)
            ->postJson('/api/sign-out');

        // Сбрасываем состояние auth между запросами
        auth()->forgetGuards();

        $response = $this->withToken($token->plainTextToken)
            ->getJson('/api/user');

        $response->assertStatus(401);
    }
}
