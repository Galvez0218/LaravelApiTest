<?php

namespace Src\Auth\Domain\Entities;

class AuthEntity
{
    public function __construct(
        public ?int $id = null,
        public string $username,
        public string $password,
        public ?string $email = null,
        public ?string $token = null,
    ) {}
}
