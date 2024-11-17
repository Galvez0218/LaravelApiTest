<?php

namespace Src\Auth\Infrastructure\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Auth\Application\DTO\LoginDTO;
use Src\Auth\Application\Services\AuthService;
use Src\Auth\Application\UseCase\LoginUseCase;
use Src\Auth\Infrastructure\Mappers\LoginMapper;
use Src\Auth\Infrastructure\Request\LoginRequest;
use Src\Helpers\Traits\MapsToDTO;

class AuthController extends Controller
{
    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */

    #TRAIT
    // use MapsToDTO;

    public function __construct(private AuthService $authService) {}

    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $dataDTO = (new LoginMapper())->fromRequest($request);

            // Llamamos al servicio de autenticación
            $data = $this->authService->handleLogin($dataDTO);

            return response()->json([
                'message' => 'Login successful',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 401);
        }
    }
}
