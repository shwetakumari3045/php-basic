<?php 

try{

    //if error occures then it wil be catch by the exception
    $dividend = 100;
    $divisor = 0;
    if($divisor==0)
        throw new Exception("Sorry, the divisor can not be zero");
    echo $dividend/$divisor;
}catch(Exception $e){
    var_dump($e->getMessage());
}
?>