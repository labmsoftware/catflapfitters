<?php

namespace App\Http\Action\Faq;


use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ViewFaqAction
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
                'title' => 'FAQs - Cat Flap Fitters Yorkshire'
            ]
        ];
        return $this->twig->render($response, '/faq/faq.twig',
        $data);
    }
}