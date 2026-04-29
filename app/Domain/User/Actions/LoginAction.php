<?php

declare(strict_types=1);

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\NewAccessToken;

final class LoginAction
{
    public function __construct(
        private AuthorizeAction $authorizeAction,
    ) {}

    /**
     * @throws AuthenticationException
     */
    public function handle(string $email, string $password): NewAccessToken
    {
        $user = User::query()->where('email', $email)->first();

        if (!$user || !Hash::check($password, $user->getAuthPassword())) {
            throw new AuthenticationException();
        }

        return $this->authorizeAction->handle($user);
    }
}
