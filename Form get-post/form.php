<?php
$PageTitle="Form Php";
include("header.php");
?>

<?php
if(isset($_REQUEST['username'])){
    $username =$_REQUEST['username'];
    $email =$_REQUEST['email'];
    $message =$_REQUEST['message'];
    $gender =(isset($_REQUEST['gender']))?$_REQUEST['gender']:'';

}

var_dump($_POST)
?>

<form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="username">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <div>
            Gender:
            <label><input type="radio" name="gender" value="Male">Male</label>
            <label><input type="radio" name="gender" value="Female">Female</label>
        </div>

        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>

        <input type="submit" value="Submit">
    </form>

<?php
include('footer.php')
?>