<?php

use Src\Bootstrap\Providers;

return [
    App\Providers\AppServiceProvider::class,
    Providers::loadProviders(),
    // ...$providers,
];
