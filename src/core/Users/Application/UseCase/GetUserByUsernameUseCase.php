<?php

namespace Src\Core\Users\Application\UseCase;

use Src\Core\Users\Domain\Entities\UserEntity;
use Src\Core\Users\Domain\Repositories\UserRepositoryInterface;
use Src\Shared\Helpers\Helpers\Str;

class GetUserByUsernameUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepositoryInterface
    ) {}

    public function __invoke(string $username): UserEntity|bool
    {
        $username = Str::toLowercase($username);

        $userEntity = $this->userRepositoryInterface->getUserByUsername($username);

        if (!$userEntity) {
            return false;
        }
        return $userEntity;
    }
}
