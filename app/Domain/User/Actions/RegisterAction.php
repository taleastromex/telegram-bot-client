<?php

declare(strict_types=1);

namespace App\Domain\User\Actions;

use Laravel\Sanctum\NewAccessToken;

final class RegisterAction
{
    public function __construct(
        private CreateUserAction $createUserAction,
        private AuthorizeAction $authorizeAction,
    ) {}

    public function handle(string $name, string $email, string $password): NewAccessToken
    {
        $user = $this->createUserAction->handle($name, $email, $password);

        $apiToken = $this->authorizeAction->handle($user);

        return $apiToken;
    }
}
