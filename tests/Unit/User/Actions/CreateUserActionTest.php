<?php

declare(strict_types=1);

namespace Tests\Unit\User\Actions;

use App\Domain\User\Actions\CreateUserAction;
use App\Domain\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CreateUserActionTest extends TestCase
{
    use RefreshDatabase;

    private CreateUserAction $action;

    protected function setUp(): void
    {
        parent::setUp();
        $this->action = new CreateUserAction();
    }

    public function test_creates_user_with_correct_data(): void
    {
        $user = $this->action->handle('John Doe', 'john@example.com', 'password123');

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals('john@example.com', $user->email);
    }

    public function test_password_is_hashed(): void
    {
        $user = $this->action->handle('John Doe', 'john@example.com', 'password123');

        $this->assertNotEquals('password123', $user->password);
        $this->assertTrue(Hash::check('password123', $user->password));
    }

    public function test_user_is_persisted_to_database(): void
    {
        $this->action->handle('John Doe', 'john@example.com', 'password123');

        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
            'name' => 'John Doe',
        ]);
    }
}
