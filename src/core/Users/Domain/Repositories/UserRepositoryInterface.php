<?php

namespace Src\Core\Users\Domain\Repositories;

use Src\Core\Users\Domain\Entities\UserEntity;

interface UserRepositoryInterface
{
    public function getUserByUsername(string $username): UserEntity|bool;

    // public function save(UserEntity $entity): UserEntity|bool;
}
