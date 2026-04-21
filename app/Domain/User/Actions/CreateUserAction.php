<?php

declare(strict_types=1);

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;

final class CreateUserAction
{
    public function handle(string $name, string $email, string $password): User
    {
        $user = User::query()->create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        return $user;
    }
}
