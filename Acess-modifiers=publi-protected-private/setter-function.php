<?php
class person{
    private $color;
    private $gender;
    private $age;
    private $name;

    public function setColor($color){
        $this->color=$color;
    }
    public function setGender($gender){
        $this->gender=$gender;
    }    
    public function setAge($age){
        $this->age=$age;
    }

    public function setName($name){
        $this->name=$name;
    }
   
    public function abc(){
        echo "$this->name is speaking<br>";
    }
    public function abcd(){
        echo "$this->age years<br>";
    }
    
    public function sqr(){
        echo "$this->color color<br>";
    }

    public function sqr1(){
        echo "$this->gender gender<br>";
    }

}

$p1 = new Person();
$p1->setName('Payal');
$p1->abc();

$p2 = new Person();
$p2->setName('Amit');
$p2->abc();

$p1->setAge('20');
$p1->abcd();

$p1->setColor('Green','Yellow');
$p1->sqr();

$p1->setGender('female','male');
$p1->sqr1();




?>