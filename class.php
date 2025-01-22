<?php 
class Person{
    //properties
    //methods
    private $color;
    private $gender;
    private $age;
    private $name;

    //setter functions

    public function setColor($color){
        $this->color = $color;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setName($name){
        $this->name = $name;
    }
    ///getter function

    public function getColor(){
        return $this->color;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getAge(){
        return $this->age;
    }
    public function getName(){
        return $this->name;
    }
    public function speak(){
        echo "$this->name is speaking<br>";
    }
}

$p1 = new Person();
$p1->setName('Rohit sharma');
$p1->speak();

$p2 = new Person();
$p2->setName('Komal Kashyap');
$p2->setGender('Female');
$p2->speak();
echo $p2->getGender();
?>