<?php

namespace Src\Core\Users\Infrastructure\Persistances\Eloquent;


use Src\Core\Users\Domain\Entities\UserEntity;
use Src\Core\Users\Domain\Repositories\UserRepositoryInterface;
use Src\Core\Users\Infrastructure\Persistances\Eloquent\Models\UserModel;


class UserEloquent implements UserRepositoryInterface
{
    // use MapsToDTO;

    /**
     * FECHA DE CREACION: 26-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    public function getUserByUsername(string $username): UserEntity|bool
    {
        $user = UserModel::where("username",  $username)->first();

        if (!$user) {
            return false;
        }

        $userEntity = new UserEntity();

        $userEntity->id = $user->id;
        $userEntity->username = $user->username;
        $userEntity->email = $user->email;
        $userEntity->password = $user->password;

        return $userEntity;
    }
}
