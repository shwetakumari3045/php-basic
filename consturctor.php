<?php 
class Person{
    private $name;
    private $gender;
    private $color;
    private $age;

    public function __construct($name,$gender,$color) {
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }
    public function displayDetails(){
        return "Hello i am $this->name";
    }
}

$p1 = new Person('Rohit','Male','Brown');
echo $p1->displayDetails();
?>