<?php

declare(strict_types = 1);

namespace App\Http\Action;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Action
{
    protected array $args;
    
    public function __construct(
        
    ) {
        
    }

    abstract public function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface;
}