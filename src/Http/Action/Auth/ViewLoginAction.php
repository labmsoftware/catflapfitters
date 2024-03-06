<?php

namespace App\Http\Action\Auth;

use Slim\Views\Twig;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class ViewLoginAction
{
    public function __construct(
        private Twig $twig,
    ) {
        
    }

    public function __invoke(
        RequestInterface $request,
        ResponseInterface $response,
        array $args
    ) {
        $data = [
            'page' => [
                'title' => 'Login - SuprNDM'
            ]
        ];

        return $this->twig->render($response, '/auth/login.twig', $data);
    }
}