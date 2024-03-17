<?php

namespace App\Http\Action\View;

use App\Http\Action\Action;
use App\Http\Renderer\TwigRenderer;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class ViewGalleryAction extends Action
{
    public function __construct(
        private TwigRenderer $renderer
    ) {
        
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $data = [
            'images' => [
                'Clear-man',
                'White-on-grey-microchip',
                '2024-01-05-2',
                '2024-01-05-3',
                '2024-01-05-5',
                '2024-01-05-6',
                '2024-01-05-4',
                '2024-01-05-8',
                '2024-01-05-9',
                'Brown',
                'Clear-down',
                '2024-01-05-1',
                'Brown-in-glass',
                '2024-01-05-7'
            ]
        ];

        return $this->renderer->renderTemplate($response, '/gallery.twig', $data);
    }
}