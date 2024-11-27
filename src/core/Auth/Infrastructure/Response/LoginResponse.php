<?php

namespace Src\Core\Auth\Infrastructure\Response;

use Illuminate\Support\Fluent;
use Src\Core\Auth\Domain\Entities\AuthEntity;
use Src\Core\Users\Domain\Entities\UserEntity;

class LoginResponse extends Fluent
{
    public function __construct(private array $login)
    {
        parent::__construct($this->toArray());
    }

    public function toArray(): array
    {
        return [
            'token'             => $this->login['token'],
            // 'refresh_token'     => $this->login['refresh_token'],
            'token_type'        => $this->login['token_type'],
            'user'   => [
                'id'            => $this->login['user']->id,
                'username'      => $this->login['user']->username,
                'email'         => $this->login['user']->email,
                // 'businesses'    => $this->login['user']->businesses,
                // 'superadmin'    => false //$this->login['superadmin'],
            ],
            // 'abilities'         => $this->login['abilities'],
            // 'modulesActives'    => $this->login['modulesActives']
        ];
    }
}
