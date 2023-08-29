<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::resource('auth', App\Http\Controllers\API\AuthAPIController::class)
    ->except(['register', 'login']);

Route::resource('tests', App\Http\Controllers\API\TestAPIController::class)
    ->except(['create', 'edit'])
    ->middleware('auth');