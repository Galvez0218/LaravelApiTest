<?php

namespace Src\Core\Auth\Infrastructure\Mappers;

use Illuminate\Http\Request;
use Src\Core\Auth\Application\DTO\LoginDTO;
use Src\Core\Auth\Infrastructure\Request\LoginRequest;
use Src\Shared\Helpers\Traits\MapsToDTO;

class LoginMapper
{
    use MapsToDTO;

    public function fromRequest(LoginRequest $request): LoginDTO
    {
        $credentials = $request->validated();

        // return $this->mapToDTO(LoginDTO::class, $credentials);
        // return $this->mapToDTO(LoginDTO::class, $validatedData);

        // Una foma de mandar una data y quitar mi mapsDTO
        return new LoginDTO(...$credentials);
        // return new LoginDTO(
        //     username: $data['username'],
        //     password: $data['password']
        // );
    }
}
