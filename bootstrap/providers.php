<?php

$providers = include_once __DIR__ . "/../src/Bootstrap/providers.php";

return [
    App\Providers\AppServiceProvider::class,
    ...$providers,
];
