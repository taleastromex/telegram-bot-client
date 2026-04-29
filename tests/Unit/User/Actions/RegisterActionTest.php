<?php

declare(strict_types=1);

namespace Tests\Unit\User\Actions;

use App\Domain\User\Actions\AuthorizeAction;
use App\Domain\User\Actions\CreateUserAction;
use App\Domain\User\Actions\RegisterAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\NewAccessToken;
use Tests\TestCase;

class RegisterActionTest extends TestCase
{
    use RefreshDatabase;

    private RegisterAction $action;

    protected function setUp(): void
    {
        parent::setUp();
        $this->action = new RegisterAction(
            new CreateUserAction(),
            new AuthorizeAction(),
        );
    }

    public function test_returns_access_token(): void
    {
        $token = $this->action->handle('John Doe', 'john@example.com', 'password123');

        $this->assertInstanceOf(NewAccessToken::class, $token);
    }

    public function test_plain_text_token_is_string(): void
    {
        $token = $this->action->handle('John Doe', 'john@example.com', 'password123');

        $this->assertIsString($token->plainTextToken);
        $this->assertNotEmpty($token->plainTextToken);
    }

    public function test_creates_user_and_token_in_database(): void
    {
        $this->action->handle('John Doe', 'john@example.com', 'password123');

        $this->assertDatabaseHas('users', ['email' => 'john@example.com']);
        $this->assertDatabaseHas('personal_access_tokens', ['name' => 'api']);
    }
}
