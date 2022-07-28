<?php

namespace MatheusBRDev\WordSearch\Controllers;

use MatheusBRDev\WordSearch\Entity\Word;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class SaveWordController implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        try {
            $word = new Word($request->getParsedBody()['word']);

            return new Response(200, [], json_encode(['ok' => $word->word]));
        } catch (\InvalidArgumentException $exception) {
            return new Response(200, [], json_encode(['message' => $exception->getMessage()]));
        }
    }
}