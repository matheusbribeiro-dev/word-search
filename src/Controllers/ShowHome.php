<?php

namespace MatheusBRDev\WordSearch\Controllers;

use MatheusBRDev\WordSearch\Traits\HtmlRenderer;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ShowHome implements RequestHandlerInterface
{
    use HtmlRenderer;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->render('home.php', [
            'title' => 'WordSearch'
        ]);

        return new Response(200, [], $html);
    }
}