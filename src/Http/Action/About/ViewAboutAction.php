<?php

namespace App\Http\Action\About;


use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ViewAboutAction
{
    private Twig $twig;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args) : ResponseInterface
    {
        $data = [
            'page' => [
                'title' => 'About Us - Cat Flap Fitters Yorkshire'
            ]
        ];
        return $this->twig->render($response, '/about/about.twig',
        $data);
    }
}