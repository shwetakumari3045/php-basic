<?php
function makeItBold($string){
    return "<strong>$string</strong>";
}

$strings = ["ROHIT","SUMIT","AMIT"];

$bold_Strings = array_map("makeItBold",$strings);
var_dump($bold_Strings);
?>