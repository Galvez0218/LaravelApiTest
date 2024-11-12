<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/auth')
    ->name('auth.')
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('/login',  'login')->name('login');
    });
