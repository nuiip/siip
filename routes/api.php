<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::resource('users', App\Http\Controllers\API\UsersAPIController::class)
    ->except(['create', 'edit']);

Route::resource('tests', App\Http\Controllers\API\TestAPIController::class)
    ->except(['create', 'edit']);