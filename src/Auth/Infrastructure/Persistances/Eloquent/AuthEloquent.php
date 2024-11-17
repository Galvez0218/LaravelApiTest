<?php

namespace Src\Auth\Infrastructure\Persistances\Eloquent;

use Src\Auth\Domain\Entities\AuthEntity;
use Src\Auth\Domain\Repositories\AuthRepositoryInterface;
use Src\Auth\Infrastructure\Persistances\Eloquent\Models\User;
use Src\Helpers\Traits\MapsToDTO;

class AuthEloquent implements AuthRepositoryInterface
{
    use MapsToDTO;

    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    public function findByUsername(string $username): AuthEntity|bool
    {
        $user = User::select('id', 'username', 'password', 'email')
            ->where('username', $username)
            ->first()
            ->makeVisible('password')->toArray();

        if (!$user) {
            return false;
        }

        // Usamos el trait para mapear el modelo a AuthEntity
        return $this->mapToDTO(AuthEntity::class, $user);
    }
}
