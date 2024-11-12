<?php

namespace App\UseCases\Auth;

use App\Service\AuthService;

class LoginUserUseCase
{
    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function execute(string $email, string $password): bool
    {
        return $this->authService->login($email, $password);
    }
}
