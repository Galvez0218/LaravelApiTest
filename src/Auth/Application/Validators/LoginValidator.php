<?php

namespace Src\Auth\Application\Validators;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginValidator
{
    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    // public function validateCredentials(string $username, string $password): bool
    // {
    //     return Auth::attempt(['username' => $username, 'password' => $password]);
    // }
    public static function validateCredentials($user, string $password): void
    {
        // if (!$user || !password_verify($password, $user->password)) {
        //     throw ValidationException::withMessages([
        //         'credentials' => ['Invalid username or password.']
        //     ]);
        // }
        if (!$user) {
            throw ValidationException::withMessages([
                'username' => ['El usuario no existe.']
            ]);
        }
        if (!password_verify($password, $user->password)) {
            throw ValidationException::withMessages([
                'password' => ['Contraseña incorrecta.']
            ]);
        }
    }
}
