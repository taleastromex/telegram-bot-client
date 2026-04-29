<?php

declare(strict_types=1);

namespace App\Http\EntryPointGroup\User\Controllers;

use App\Abstracts\Controller;
use App\Domain\User\Actions\LoginAction;
use App\Domain\User\Actions\RegisterAction;
use App\Http\EntryPointGroup\User\Requests\LoginRequest;
use App\Http\EntryPointGroup\User\Requests\RegisterRequest;
use App\Http\EntryPointGroup\User\Resources\NewAccessTokenResource;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegisterRequest $request, RegisterAction $action): NewAccessTokenResource
    {
        $token = $action->handle(
            name: $request->validated('name'),
            email: $request->validated('email'),
            password: $request->validated('password'),
        );

        return NewAccessTokenResource::make($token);
    }

    public function login(LoginRequest $request, LoginAction $action): JsonResponse
    {
        try {
            $token = $action->handle(
                $request->validated('email'),
                $request->validated('password')
            );

            return NewAccessTokenResource::make($token)->response();
        } catch (AuthenticationException) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([], 204);
    }
}
