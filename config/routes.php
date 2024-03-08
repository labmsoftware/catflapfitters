<?php

use Slim\App;
use App\Http\Action\Faq\ViewFaqAction;
use App\Http\Action\Home\ViewHomeAction;
use App\Http\Action\Quote\SendQuoteAction;
use App\Http\Action\Quote\ViewQuoteAction;
use App\Http\Action\Contact\ViewContactAction;
use App\Http\Action\Gallery\ViewGalleryAction;
use App\Http\Action\Reviews\ViewReviewsAction;
use App\Http\Action\Products\ViewProductsAction;
use App\Http\Action\About\ViewAboutAction;

// TODO: Add CORS middleware to protect routes

return function(App $app) {
    $app->get('/', ViewHomeAction::class);
    $app->get('/quote', ViewQuoteAction::class);
    $app->post('/sendquote', SendQuoteAction::class);
    $app->get('/faq', ViewFaqAction::class);
    $app->get('/products', ViewProductsAction::class);
    $app->get('/reviews', ViewReviewsAction::class);
    $app->get('/gallery', ViewGalleryAction::class);
    $app->get('/about-us', ViewAboutAction::class);
    $app->get('/contact-us', ViewContactAction::class);
};