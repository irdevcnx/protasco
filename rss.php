<?php 


$url = "http://protascoactive.com.my/feed/";
$xml = simplexml_load_file($url);
print_r($xml);


$json = json_encode($xml);
$array = json_decode($json,TRUE);

// print_r($array);

?>