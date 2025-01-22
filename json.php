<?php 
$data = array("name"=>"rohit","age"=>1);

//convert to json

$data_json = json_encode($data);
var_dump($data_json);
echo "<br>";
$json_data = '{"name":"Subhdraa","age":"100"}';

//convert back to array 
$data =  json_decode($json_data);
echo "<br>";
var_dump($data);
?>