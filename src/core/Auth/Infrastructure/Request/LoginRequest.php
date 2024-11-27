<?php

namespace Src\Core\Auth\Infrastructure\Request;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El nombre de usuario es obligatorio.',
            // 'username.exists'   => 'El usuario es incorrecto.',
            'password.required' => 'La contraseña es obligatoria.',
            // 'password.exists'   => 'La contraseña e incorrecta'
        ];
    }


    /**
     * Extrae los datos validados y los devuelve como un arreglo plano.
     */
    public function validatedData(): array
    {
        return $this->validated();
    }
    // $validator = validator($request->all(), $rules, $messages);

    // if($validator->fails()){
    //     throw new InfinitoValidationException('Error al validar', messageList: $validator->errors());
    // }

    // if(!Auth::attempt($request->only('username', 'password'))){
    //     throw new InfinitoValidationException('Usuario o contraseña incorrecta');
    // }
}
