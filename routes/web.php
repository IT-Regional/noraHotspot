<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\AuthController;

/* Route::get('/', function () {
    return view('home');
}); */

Route::get('/', [RoutesController::class, 'login'])
    ->name('login');

Route::get('/auth/redirect', [AuthController::class, 'redirect'])
    ->name('auth.redirect');

Route::get('/auth/callback', [AuthController:: class, 'callback'])
    ->name('auth.callback');