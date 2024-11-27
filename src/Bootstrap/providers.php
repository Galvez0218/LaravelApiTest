<?php

namespace Src\Bootstrap;

use Illuminate\Support\Facades\App;

class Providers
{

    public static function loadProviders()
    {
        // ----------------     FUNCION CORE    -------------------------//
        $basePathCore = __DIR__ . "/../core";

        if (!is_dir($basePathCore)) {
            throw new \RuntimeException("la ruta en providers no es la correcta o no existe");
        }

        $providerFile = $basePathCore . DIRECTORY_SEPARATOR . 'Providers.php';

        if (is_file($providerFile)) {

            $providers = require $providerFile;

            foreach ($providers as $key => $provider) {
                if (class_exists($provider)) {
                    // dd($provider);
                    App::register($provider);
                } else {
                    error_log("El proveedor de servicios '$namespace' no existe.");
                }
            }
        } else {
            error_log('Archivo de ruta ' . $providerFile . ' no encontrada');
        }

        // ----------------     FUNCION MODULOS    -------------------------//

        // $basePathModules = __DIR__ . "/../Modules";

        // if (!is_dir($basePathModules)) {
        //     throw new \RuntimeException("la ruta en providers no es la correcta o no existe");
        // }

        // $directories = scandir($basePathModules);

        // foreach ($directories as $directory) {
        //     if ($directory === '.' || $directory === '..') {
        //         continue;
        //     }

        //     $path = $basePathModules . DIRECTORY_SEPARATOR . $directory;

        //     if (is_dir($path)) {

        //         $providerFile = $path . DIRECTORY_SEPARATOR . 'Providers.php';


        //         if (is_file($providerFile)) {
        //             $providersList = require $providerFile;

        //             foreach ($providersList as $provider) {
        //                 if (class_exists($provider)) {
        //                     App::register($provider);
        //                 } else {
        //                     error_log('el provider: ' . $provider . ' no existe');
        //                 }
        //             }
        //         } else {
        //             error_log('Archivo de ruta ' . $providerFile . ' no encontrada');
        //         }
        //     }
        // }
    }
}
