<?php
class person{
    private $color;
    private $gender;
    private $age;
    private $name;

    public function speak(){
        echo"Good morning";
        echo "<br>";
        echo"Good evening";
    
    }

}

$p1 = new person();
$p1->speak();
?>