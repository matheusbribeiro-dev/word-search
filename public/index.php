<?php
require __DIR__ . '/../vendor/autoload.php';

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Psr\Http\Server\RequestHandlerInterface;

$uri = $_SERVER['REQUEST_URI'];
$routes = require __DIR__ . '/../routes/web.php';

if (!array_key_exists($uri, $routes)) {
    http_response_code(404);
    exit();
}

$psr17Factory = new Psr17Factory();
$creator = new ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);
$serverRequest = $creator->fromGlobals();

/** @var RequestHandlerInterface $controller */
$controller = new $routes[$uri];
$response = $controller->handle($serverRequest);

// Emit headers iteratively:
 foreach ($response->getHeaders() as $name => $values) {
     foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
     }
 }

 echo $response->getBody();