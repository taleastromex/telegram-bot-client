<?php

declare(strict_types=1);

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;
use Laravel\Sanctum\NewAccessToken;

final class AuthorizeAction
{
    public function handle(User $user): NewAccessToken
    {
        $apiToken = $user->createToken('api');

        return $apiToken;
    }
}
