<?php

namespace Src\Core\Auth\Infrastructure\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Src\Helpers\Traits\MapsToDTO;
use App\Http\Controllers\Controller;
use Src\Core\Auth\Application\Services\AuthService;
use Src\Core\Auth\Infrastructure\Mappers\LoginMapper;
use Src\Core\Auth\Infrastructure\Request\LoginRequest;
use Src\Core\Auth\Infrastructure\Response\LoginResponse;

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
            // dd($dataDTO);
            // Llamamos al servicio de autenticación
            $data = $this->authService->login($dataDTO);

            $response = new LoginResponse($data);

            // return $this->response(data: $response);
            return response()->json([
                'message' => 'Login successful',
                'data' => $response
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 401);
        }
    }
}
