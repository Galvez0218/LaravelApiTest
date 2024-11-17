<?php

namespace Src\Auth\Domain\Repositories;

use Src\Auth\Domain\Entities\AuthEntity;

interface AuthRepositoryInterface
{
    //     /**
    //      * FECHA DE CREACION: 15-11-2024.
    //      * FECHA DE MODIFICACION:
    //      * USER: G. TAIPE ALVINA
    //      */
    //     // public function getUserByUsername(string $username);

    public function findByUsername(string $username): AuthEntity|bool;
}
