<?php
class person{
    private $color;
    private $gender;
    private $age;
    private $name;

    public function getColor($color){
        $this->color=$color;
    }
    public function getGender($gender){
        $this->gender=$gender;
    }    
    public function getAge($age){
        $this->age=$age;
    }

    public function getName($name){
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
$p1->getName('Rishu');
$p1->abc();

$p2 = new Person();
$p2->getName('Amrita');
$p2->abc();

$p1->getAge('20');
$p1->abcd();

$p1->getColor('Green','Yellow');
$p1->sqr();

$p1->getGender('female');
$p1->sqr1();




?>