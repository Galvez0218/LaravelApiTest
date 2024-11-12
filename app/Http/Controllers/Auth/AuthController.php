<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\UseCases\Auth\LoginUserUseCase;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $loginUserUseCase;

    public function __construct(LoginUserUseCase $loginUserUseCase)
    {
        $this->loginUserUseCase = $loginUserUseCase;
    }

    public function login(Request $request)
    {
        dd('hola');
        $credentials = $request->only(['email', 'password']);

        $isAuthenticated = $this->loginUserUseCase->execute($credentials['email'],  $credentials['password']);

        if ($isAuthenticated) {
            return response()->json(['message' => 'Login successful'], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
}
