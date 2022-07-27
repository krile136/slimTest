<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->addErrorMiddleware(true, false, false);

$app->get('/', function (Request $request, Response $response, $args) {
   var_dump($args);
    $response->getBody()->write("Hello world!!!!!!!");
    return $response;
});

$app->get('/test', function (Request $request, Response $response, $args) {
    $response->getBody()->write("test?");
    return $response;
});

$app->run();