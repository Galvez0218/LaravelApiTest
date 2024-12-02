<?php

use Illuminate\Support\Facades\Route;
use Src\Core\Business\Infrastructure\Controllers\BusinessController;

Route::prefix('core/admin/business')
    ->name('core.admin.business')
    ->middleware('auth.sanctum')
    ->controller(BusinessController::class)
    ->group(function () {
        Route::GET('/all',  'login')->name('all');
    });
