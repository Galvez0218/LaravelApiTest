<?php

namespace Src\Auth\Infrastructure\Response;

use Illuminate\Support\Fluent;
use Src\Auth\Application\DTO\LoginDTO;
use Src\Auth\Domain\Entities\AuthEntity;

class LoginResponse extends Fluent
{
    public function __construct(AuthEntity $authEntity)
    {
        parent::__construct($authEntity);
    }

    // public function self(): LoginDTO
    // {
    //     return new LoginDTO(
    //         username: $authEntity['username'],
    //         token: $authEntity['token'],
    //     );
    // }
}
