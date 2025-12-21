<?php

use App\Controllers\MainController;
use App\Controllers\DocsController;

return [
    [
        'path' => '/',
        'controller' => MainController::class,
        'action' => 'home',
    ],
    [
        'path' => '/about',
        'controller' => MainController::class,
        'action' => 'about',
    ],
    [
        'path' => '/docs/{subject}/{sub?}',
        'controller' => DocsController::class,
    ],
];
