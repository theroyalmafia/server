<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/go/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
$output = shell_exec('./sysbench2.sh');
if(isset($output))
{
$myfile = fopen("gocpu.txt", "r");
if ($myfile) {
 while (($line = fgets($myfile)) !== false) {
if (preg_match('/Number of threads:/', $line, $match)) {

$keyw=preg_split("/[\s,]+/",$line);
$result=array();
array_push($result,array(
    "number_of_threads" => $keyw[3]));

}//if
if (preg_match('/total time:/', $line, $match)) {
$keyw=preg_split("/[\s,]+/",$line);
array_push($result,array("total time" => $keyw[3]));
}//if
}//while
$newresponse = json_encode($result);
    //$newresponse= $response->withJson($result,201);
$arr1=array('[',']');
$arr2=array(' ',' ');

$new2=str_replace($arr1,$arr2,$newresponse);
return $new2;
}//if myfile
}//if isset
});
   
$app->run();

?>
