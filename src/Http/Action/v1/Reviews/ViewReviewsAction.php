<?php

namespace App\Http\Action\Reviews;


use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ViewReviewsAction
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
                'title' => 'Reviews - Cat Flap Fitters Yorkshire'
            ]
        ];
        return $this->twig->render($response, '/reviews/reviews.twig',
        $data);
    }
}