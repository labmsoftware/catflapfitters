<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;
use App\Http\Action\Auth\SignpostAction;
use App\Http\Action\Auth\ViewLoginAction;

// TODO: Add CORS middleware to protect routes

return function(App $app) {

    $app->get('/', SignpostAction::class);
    
    $app->group('/auth', function(RouteCollectorProxy $auth) {
        $auth->get('/login', ViewLoginAction::class)->setName('auth-view-login');
    });

};