<?php

declare(strict_types=1);

namespace App\Http\EntryPointGroup\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:150',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|confirmed',
        ];
    }
}
