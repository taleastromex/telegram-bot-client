<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string $redirectTo = '/app'): Response
    {
        $rawToken = $request->bearerToken()
            ?? $request->cookie('access_token');

        if ($rawToken && PersonalAccessToken::findToken($rawToken)?->tokenable) {
            return redirect($redirectTo);
        }

        return $next($request);
    }
}
