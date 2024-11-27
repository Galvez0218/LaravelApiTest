<?php

namespace Src\Core\Auth\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Core\Users\Domain\Repositories\UserRepositoryInterface;
use Src\Core\Users\Infrastructure\Persistances\Eloquent\UserEloquent;

class AuthProvider extends ServiceProvider
{
    /**
     * version: 01
     * creation date: 11 de noviembre 2024
     * modification date:
     */
    public function register(): void
    {
        $this->app->singleton(UserRepositoryInterface::class, function () {
            return new UserEloquent();
        });
        // $this->app->bind(UserRepositoryInterface::class, UserEloquent::class);
    }
}
