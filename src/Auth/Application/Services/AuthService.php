<?php

namespace Src\Auth\Application\Services;

use Src\Auth\Application\DTO\LoginDTO;
use Src\Auth\Application\UseCase\LoginUseCase;
use Src\Auth\Domain\Entities\AuthEntity;

class AuthService
{
    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    public function __construct(private LoginUseCase $loginUseCase) {}

    public function handleLogin(LoginDTO $loginDTO): AuthEntity|bool
    {
        return $this->loginUseCase->__invoke($loginDTO);
    }
}
