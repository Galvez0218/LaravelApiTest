<?php

namespace Src\Core\Auth\Application\Services;

use Src\Core\Auth\Application\DTO\LoginDTO;
use Src\Core\Auth\Application\UseCase\LoginUseCase;

class AuthService
{
    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    public function __construct(private LoginUseCase $loginUseCase) {}

    public function login(LoginDTO $loginDTO): array
    {
        return $this->loginUseCase->__invoke($loginDTO);
    }

    // public function logout(): array
    // {
    // return $this->loginUseCase->__invoke($loginDTO);
    // }
}
