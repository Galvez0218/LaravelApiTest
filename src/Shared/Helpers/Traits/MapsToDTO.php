<?php

namespace Src\Shared\Helpers\Traits;

trait MapsToDTO
{
    /**
     * FECHA DE CREACION: 15-11-2024.
     * FECHA DE MODIFICACION:
     * USER: G. TAIPE ALVINA
     */
    /**
     * Método para mapear un array a un DTO específico.
     *
     * @param string $dtoClass La clase del DTO
     * @param array $data Los datos del request
     * @return object
     */
    public function mapToDTO(string $dtoClass, array $data): Object
    {
        // Si es un modelo Eloquent, convertirlo en array
        if (is_object($data)) {
            $data = $data->toArray();
        }

        return new $dtoClass(...$data);
    }
}
