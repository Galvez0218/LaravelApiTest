<?php

$auth = require_once __DIR__ . '/../Auth/Provider.php';
// $core = require_once __DIR__ . '/../core/provider.php';

return [
    ...$auth,
    // ...$core
];
