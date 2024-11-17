<?php

namespace Src\Auth\Infrastructure\Mappers;

use Illuminate\Http\Request;
use Src\Auth\Application\DTO\LoginDTO;
use Src\Helpers\Traits\MapsToDTO;

class LoginMapper
{
    use MapsToDTO;

    public function fromRequest(Request $request): LoginDTO
    {
        $credentials = $request->validated();

        return $this->mapToDTO(LoginDTO::class, $credentials);
    }
}
