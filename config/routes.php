<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;
use App\Http\Action\View\ViewFaqsAction;
use App\Http\Action\View\ViewHomeAction;
use App\Http\Action\View\ViewGalleryAction;
use App\Http\Action\View\ViewProductsAction;

// TODO: Add CORS middleware to protect routes

return function(App $app) {

    $app->group('', function(RouteCollectorProxy $views) {
        $views->get('/', ViewHomeAction::class);
        $views->get('/products', ViewProductsAction::class);
        $views->get('/faqs', ViewFaqsAction::class);
        $views->get('/gallery', ViewGalleryAction::class);
    });
};