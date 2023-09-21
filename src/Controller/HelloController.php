<?php
declare(strict_types=1);

namespace BlogWeb\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HelloController
{
    public function handleHello(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->getBody()->write('Was Sachen machen?');
        return $response;
    }
}