<?php

namespace App\Http\Action\Auth;

use Slim\Views\Twig;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class SignpostAction
{
    public function __construct(
        private Twig $twig
    ) {
        
    }

    public function __invoke(
        RequestInterface $request,
        ResponseInterface $response,
        array $args
    ) {
        return $response->withHeader('Location', $_ENV['APP_URL'] . '/auth/login')
                        ->withStatus(302);
    }
}