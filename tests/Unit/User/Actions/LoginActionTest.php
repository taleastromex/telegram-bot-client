<?php

declare(strict_types=1);

namespace Tests\Unit\User\Actions;

use App\Domain\User\Actions\AuthorizeAction;
use App\Domain\User\Actions\LoginAction;
use App\Domain\User\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\NewAccessToken;
use Tests\TestCase;

class LoginActionTest extends TestCase
{
    use RefreshDatabase;

    private LoginAction $action;

    protected function setUp(): void
    {
        parent::setUp();
        $this->action = new LoginAction(new AuthorizeAction());
    }

    public function test_returns_token_for_valid_credentials(): void
    {
        User::factory()->create([
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
        ]);

        $token = $this->action->handle('john@example.com', 'password123');

        $this->assertInstanceOf(NewAccessToken::class, $token);
    }

    public function test_throws_exception_for_wrong_password(): void
    {
        User::factory()->create([
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
        ]);

        $this->expectException(AuthenticationException::class);

        $this->action->handle('john@example.com', 'wrong-password');
    }

    public function test_throws_exception_for_nonexistent_email(): void
    {
        $this->expectException(AuthenticationException::class);

        $this->action->handle('nobody@example.com', 'password123');
    }
}
