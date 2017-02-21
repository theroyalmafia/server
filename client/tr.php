<?php
$array1=array(
	"number of threads"=>"4");
#$array1["number_of_threads"]="4";
$json_string = json_encode($array1);
$url="http://192.168.43.102:8888/search";
echo "hey";

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch,CURLOPT_POSTFIELDS,$json_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: '.strlen($json_string)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo $response;
curl_close($ch);
?>
