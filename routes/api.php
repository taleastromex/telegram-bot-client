<?php

use App\Http\EntryPointGroup\User\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/sign-in', [AuthController::class, 'login']);
Route::post('/sign-up', [AuthController::class, 'register']);
Route::post('/sign-out', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
