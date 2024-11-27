<?php

namespace Src\Core\Auth\Application\UseCase;

use Src\Core\Auth\Application\DTO\LoginDTO;
use Src\Core\Auth\Application\Validators\LoginValidator;
use Src\Core\Auth\Domain\Repositories\AuthRepositoryInterface;
use Src\Core\Users\Application\UseCase\GetUserByUsernameUseCase;
use Src\Core\Users\Infrastructure\Persistances\Eloquent\Models\UserModel;

class LoginUseCase
{
    public function __construct(
        // private AuthRepositoryInterface $authRepositoryInterface,
        private GetUserByUsernameUseCase $findUserByUsernameUseCase,
    ) {}

    public function __invoke(LoginDTO $loginDTO): array
    {
        $user = $this->findUserByUsernameUseCase->__invoke($loginDTO->username);

        LoginValidator::validateCredentials($user, $loginDTO->password);
        $userModel = UserModel::find($user->id);
        // dd($userModel);
        // Generamos un token de autenticación
        $token = $userModel->createToken('auth_token')->plainTextToken;
        // $user->token = $token;

        // $modulesActives = Modules::modulesLoader();  # SIRVE PARA LOS MODULOS
        // dd($modulesActives);
        return [
            'token'         => $token,
            // 'refresh_token' => $refreshToken,
            'token_type'    => 'Bearer',
            'user'          => $userModel,
            // 'superadmin'    => $user->superadmin,
            // 'abilities'     => $abilities,
            // 'modulesActives' => $modulesActives
        ];
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
