<?php

use Illuminate\Support\Facades\Route;
use Src\Auth\Infrastructure\Controller\AuthController;

Route::prefix('admin/auth')
    ->name('auth.')
    ->controller(AuthController::class)
    ->group(function () {
        Route::post('/login',  'login')->name('login');
    });
