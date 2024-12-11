<?php
$user = array("Priya", "Aditi", "Ananya", "Sanya", "Isha", "Neha", "Pooja", "Tanya", "Sneha");

function Capital($item) {
    return strtoupper($item);
}

$items = array_map("Capital", $user); 
var_dump($items);
?>