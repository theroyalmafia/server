<?php

$t=array();
$r=file_get_contents("http://192.168.43.135/test_io.json");
//echo $r;
//echo "hi";
$t = json_decode($r,true);
foreach($t['items'] as $id)
	{
		echo "items:". $id['id'] ."\n";
		print_r($t);
	};

print_r($t);
/*$m = new MongoDB\Client(mongo );
// select your database
    $db = $m->serverperf;
// select your collection
    $collection = $db->serverp;
	//$collection->insert($r);

foreach ($t as $id => $item) {
//echo $id;
   $collection->insert($item);
}*/


?>
