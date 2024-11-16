<?php

namespace Src\Auth\Domain\Interfaces;

interface UserRepository
{
    public function getUserByUsername(string $username);

    // public function save(UserEntity $turn): UserEntity|bool;
}
