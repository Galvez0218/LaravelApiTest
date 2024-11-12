<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{

    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }
}