<?php
function abc($x){
    return $x*$x;
}
$numbers = [1,2,3,4];
$sqr =array_map("abc",$numbers);
var_dump($sqr);
?>