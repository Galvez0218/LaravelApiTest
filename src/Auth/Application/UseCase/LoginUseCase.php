<?php

namespace Src\Auth\Application\UseCase;

use Src\Auth\Application\DTO\LoginDTO;
use Src\Auth\Application\Validators\LoginValidator;
use Src\Auth\Domain\Entities\AuthEntity;
use Src\Auth\Domain\Repositories\AuthRepositoryInterface;
use Src\Auth\Infrastructure\Persistances\Eloquent\Models\User;

class LoginUseCase
{
    public function __construct(
        private AuthRepositoryInterface $authRepositoryInterface,
    ) {}

    public function __invoke(LoginDTO $loginDTO): AuthEntity|bool
    {
        // Buscamos al usuario por su nombre de usuario
        $user = $this->authRepositoryInterface->findByUsername($loginDTO->username);

        LoginValidator::validateCredentials($user, $loginDTO->password);

        $userModel = new User();
        // Generamos un token de autenticación
        $token = $userModel->createToken('auth_token')->plainTextToken;

        $user->merge(['token' => $token]);

        return $user;
        // [
        //     'success' => true,
        //     $user,
        //     'token' => $token
        // ];
    }

    /**
     * Método para construir la respuesta de autenticación.
     *
     * @param object $user
     * @param string $token
     * @return array
     */
    // private function buildResponse(object $user, string $token): array
    // {
    //     return [
    //         'success' => true,
    //         'user' => [
    //             'id' => $user->id,
    //             'username' => $user->username,
    //             'email' => $user->email,
    //         ],
    //         'token' => $token,
    //     ];
    // }
}
