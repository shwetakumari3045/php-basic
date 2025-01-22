<?php 
class Person{
    
    private $color;
    private $gender;
    private $age;
    private $name;

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
$p1->setName('Payal Kumari');
$p1->speak();

$p2 = new Person();
$p2->setGender('Female');
$p2->setAge('20');
$p2->setColor('Green');

echo $p2->getGender();
echo "<br>"; 
echo $p2->getAge();
echo "<br>"; 
echo $p2->getColor();
?>