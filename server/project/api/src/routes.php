<?php
// Routes
$app->post('/search', function (Request $request, Response $response) {
 //$name = $request->getAttribute('name');
 $array1=$request->getParsedBody();
    //$final=json_encode($json_string);
    //echo "hi";
//$r=$_POST['number_of_threads'];
    //echo $app->json_body['number_of_threads'];
//echo $r;
var_dump($array1);
	//$result = array();
	//$result["success"] = "1";
   //echo $json_string;
//echo $final;
//var_dump($array1);
//return "nfkwognvdoiwvnjo";
print_r($array1);
return $array1;

 //return $response->withJson($array1,200);
//return $r;
//return $app->json_body['number_of_threads'];
});
