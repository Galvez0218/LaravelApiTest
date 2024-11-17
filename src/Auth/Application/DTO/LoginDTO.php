<?php

namespace Src\Auth\Application\DTO;

readonly class LoginDTO
{
    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    public function __construct(
        public string $username,
        public string $password,
        public ?string $token = null
    ) {}
}
