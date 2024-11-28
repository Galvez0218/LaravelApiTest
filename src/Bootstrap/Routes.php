<?php

namespace Src\Bootstrap;

use App\Exceptions\InfinitoResponseException;
use RuntimeException;

class Routes
{
    public static function loadModuleRoutes()
    {

        //----------------   FUNCION PARA CORE  -------------------------/
        # RUTAS BASES
        $basePathCore = __DIR__ . '/../Core';

        if (!is_dir($basePathCore)) {
            throw new RuntimeException('la dirección base Core no existe o no esta bien formulada');
        }

        $path = $basePathCore . DIRECTORY_SEPARATOR;

        // Si es un directorio, busca la carpeta "/../Core/Managements/V1/routes.php"
        if (is_dir($path)) {
            $routeFile = $path . 'Routes.php';

            if (is_file($routeFile)) {
                require_once $routeFile;
            } else {
                error_log('Archivo de rutas no encontradas');
            }
        }


        //----------------   FUNCION PARA MODULES  -------------------------/

        // $basePathModules = __DIR__ . '/../Modules/V1';
        // if (!is_dir($basePathModules)) {
        //     throw new RuntimeException('la dirección base de Modules no existe o no esta bien formulada');
        // }

        // $directories = scandir($basePathModules);

        // foreach ($directories as $directory) {
        //     if ($directory === '.' || $directory === '..') {
        //         continue;
        //     }

        //     $path = $basePathModules . DIRECTORY_SEPARATOR . $directory;

        //     if (is_dir($path)) {
        //         $routeFile = $path . DIRECTORY_SEPARATOR . 'Routes.php';

        //         if (is_file($routeFile)) {
        //             require_once $routeFile;
        //         }
        //     }
        // }
    }
}
