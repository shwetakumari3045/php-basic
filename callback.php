<?php
//map

function sqr($x){
    return $x*$x;
}
$numbers = [1,2,3,4];
$sqrs = array_map("sqr",$numbers);
//var_dump($sqrs);


function makeItBold($string){
    return "<strong>$string</strong>";
}

$strings = ["ROHIT","SUMIT","AMIT"];

$bold_Strings = array_map("makeItBold",$strings);
var_dump($bold_Strings);
?>