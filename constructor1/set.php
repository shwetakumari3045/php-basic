<?php 
class Person {
    
    private $color;
    private $gender;
    private $age;
    private $name;

    public function setColor($color) {
        $this->color = $color;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getColor() {
        return $this->color;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getAge() {
        return $this->age;
    }

    public function getName() {
        return $this->name;
    }

    public function speak() {
        echo "$this->name is speaking<br>";
        }

        public function speak1() {
            echo "$this->color coloresss<br>";
            }

            public function speak2(){
                echo "$this->age agesss<br>";
            }
            
            public function speak3(){
                echo "$this->gender gendersssss<br>";
            }
        
}
$persons = [];
$names = ['Payal Kumari', 'Anuradha', 'Rishu', 'Amit'];
$ages=['20','40','18','15'];
$colors =['yellow','green','brown','voilet'];
$genders =['male','female'];

foreach ($names as $name) {
    $person = new Person();
    $person->setName($name);
    $person->speak(); 
    $persons[] = $person; 
}
echo "<br>Details of the second person:<br>";
echo $persons[1]->getName() . "<br>"; 
echo "<br>";


foreach ($colors as $color){
    $person = new person();
    $person->setColor($color);
    $person->speak1();
    $persons[] = $person;

}
echo "<br>";

foreach ($ages as $age){
    $person = new person();
    $person->setAge($age);
    $person->speak2();
    $persons[] = $person;

}
echo "<br>";

foreach ($genders as $gender){
    $person = new person();
    $person->setGender($gender);
    $person->speak3();
    $persons[] = $person;

}
?>