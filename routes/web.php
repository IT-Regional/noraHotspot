<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;

/* Route::get('/', function () {
    return view('home');
}); */

Route::get('/', [RoutesController::class, 'home'])
    ->name('home');
