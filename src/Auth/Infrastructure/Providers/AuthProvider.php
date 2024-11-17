<?php

namespace Src\Auth\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Auth\Domain\Repositories\AuthRepositoryInterface;
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
        // dd((new AuthRepositoryInterface('user'))->getUserByUsername);
        $this->app->singleton(AuthRepositoryInterface::class, function () {
            return new AuthEloquent();
        });
        // $this->app->bind(AuthRepositoryInterface::class, AuthEloquent::class);
    }
}
