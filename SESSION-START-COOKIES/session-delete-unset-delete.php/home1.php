<?php
session_start();
if(isset($_SESSION['name'])){
    echo"Sorry you can not a acccess this page";
}else{
    echo "Welcome";
}
?>