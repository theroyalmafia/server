<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

    $app=new \Slim\Slim();
    $app->post('/search',function () use($app){
    $result=($app->request()->getBody());
    $final=json_encode($result);
    echo $final;

});
$app->run();
?>
