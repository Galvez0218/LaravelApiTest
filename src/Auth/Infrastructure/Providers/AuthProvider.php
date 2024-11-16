<?php

namespace App\Http\Controllers;

use Carbon\Laravel\ServiceProvider;
use Src\Auth\Infrastructure\Persistances\Eloquent\AuthEloquent;

class AuthProvider extends ServiceProvider
{
    /**
     * version: 01
     * creation date: 11 de noviembre 2024
     * modification date:
     */
    public function register(): void
    {
        // $this->app->singleton(abstract: ClassroomVirtualRepository::class, function () {
        //     return new AuthEloquent();
        // });
    }
}
