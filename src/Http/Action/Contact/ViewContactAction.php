<?php

namespace App\Http\Action\Contact;


use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ViewContactAction
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
                'title' => 'Contact Us - Cat Flap Fitters Yorkshire'
            ]
        ];
        return $this->twig->render($response, '/contact/contact.twig',
        $data);
    }
}