<?php

namespace App\Http\Controllers;

abstract class Controller
{

    const MESSAGE_RESPONSE_CREATE_SUCCESS = 'Registro creado correctamente.';
    const MESSAGE_RESPONSE_UPDATE_SUCCESS = 'Registro editado correctamente.';
    const MESSAGE_RESPONSE_DELETE_SUCCESS = 'Registro eliminado correctamente.';

    const MESSAGE_RESPONSE_SAVE_SUCCESS = 'Registro guardado correctamente.';


    // public function response(mixed $data = null, string $message = '',  array $headers = [], int $httpCode = 200)
    // {
    //     $response = [
    //         self::RESPONSE_SUCCESS => true,
    //     ];

    //     if ($message != '') {
    //         $response[self::RESPONSE_MESSAGE] = $message;
    //     }

    //     if ($data !== null) {
    //         $response[self::RESPONSE_DATA] = $data;
    //     }

    //     return new InfinitoResponse($response, $httpCode, $headers);
    // }

    // public function responseCatch(Exception $exception)
    // {
    //     if ($exception instanceof InfinitoResponseException) {
    //         throw new InfinitoResponseException(
    //             messageShow: $exception->messageShow,
    //             codeError: $exception->codeError,
    //             httpCode: $exception->httpCode,
    //             previous: $exception?->previous,
    //             messageList: $exception?->messageList
    //         );
    //     } elseif ($exception instanceof InfinitoValidationException) {
    //         throw new InfinitoValidationException(
    //             messageShow: $exception->messageShow,
    //             codeError: $exception->codeError,
    //             httpCode: $exception->httpCode,
    //             previous: $exception?->previous,
    //             messageList: $exception?->messageList
    //         );
    //     } elseif ($exception instanceof InfinitoUnauthorizedException) {
    //         throw new InfinitoUnauthorizedException(
    //             messageShow: $exception->messageShow,
    //             codeError: $exception->codeError,
    //             httpCode: $exception->httpCode,
    //             previous: $exception?->previous,
    //             messageList: $exception?->messageList
    //         );
    //     } else {
    //         if (App::environment('production')) {
    //             throw new InfinitoResponseException(
    //                 messageShow: $exception->getMessage(),
    //                 httpCode: 500
    //             );
    //         } else {
    //             throw new Exception($exception);
    //         }
    //     }
    // }
}
