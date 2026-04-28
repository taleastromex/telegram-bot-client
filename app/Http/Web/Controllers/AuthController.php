<?php

namespace App\Http\Web\Controllers;

class AuthController
{
    public function signIn()
    {
        return view('auth.sign-in');
    }

    public function signUp()
    {
        return view('auth.sign-up');
    }
}
