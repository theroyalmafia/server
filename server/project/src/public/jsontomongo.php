<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/api/submit/{name}', function (Request $request, Response $response)

{
    $name = $request->getAttribute('name');
$app->post('/api/submit/target', function () use ($app) {
    $json = $app->request->getBody();
    $data = json_decode($json, true); 
	$response->getBody()->write("successfully pushed the data");
});
});


$app->run();
?>
