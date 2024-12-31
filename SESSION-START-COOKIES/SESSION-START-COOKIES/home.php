<?php
session_start();
if(isset($_COOKIE['user'])){
    echo "Welcome Again";
}else{
    echo "Welcome";
}
echo $_SESSION['name'];
?>