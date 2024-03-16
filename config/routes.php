<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;
use App\Http\Action\View\ViewHomeAction;

// TODO: Add CORS middleware to protect routes

return function(App $app) {

    $app->group('', function(RouteCollectorProxy $views) {
        $views->get('/', ViewHomeAction::class);
    });
};