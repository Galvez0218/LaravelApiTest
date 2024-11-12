<?php

namespace App\Service;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class AuthService
{

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(string $email, string $password): bool
    {
        $user = $this->userRepository->findByEmail($email);

        if ($user && Hash::check($password, $user->password)) {
            return true; // Puede agregar lógica para tokens aquí
        }

        return false;
    }
}
