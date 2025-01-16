<?php
class Employees
{
    public $name;
    private $email;
    protected $phone;
    public function __construct($name,$email,$phone)
    {
        $this->name =$name;
        $this->name =$email;
        $this->name =$phone;
    }
}

class Faculty extends Employees{
    private $department;
    function __construct($name,$email,$phone,$department){
        parent::__construct($name,$email,$phone);
        $this->department = $department;
    }

    public function showName(){
        echo $this->phone;
        echo $this->name;
    }
}

$a1 = new Employees('Payal Kumari','Payal@gmail.com','+91 9876543210');

$b1 = new Faculty('amnuradha','anu@gmail.com','+91 8765432190','web');
$b1->showName();
?>