<?php
$pageTitle ="homepage of php class";
include("header.php");
?>

<?php
if(isset($_REQUEST['username'])){
$username  = $_REQUEST['username'];
$email = $_REQUEST['email'];
$gender = (isset($_REQUEST['gender']))?$_REQUEST['gender']:'';
$cities = (isset($_REQUEST['cities']))?$_REQUEST['cities']:[];
$countries = (isset($_REQUEST['countries']))?$_REQUEST['countries']:[];


var_dump($_POST);
}
?>
<h1>Form</h1>
<form action="" method="Post">
    <input type="text" name="username"/>
    <input type="email" name="email"/>
    <div>
        Gender
        <label for=""><input type="radio" name="gender" value="Male">Male</label>
        <label for=""><input type="radio" name="gender" value="Female">Female</label>
        <label><input type="checkbox" name="cities[]" value="Delhi">Delhi</label>
        <label><input type="checkbox" name="cities[]" value="Delhi">Meerute</label>
        <label><input type="checkbox" name="cities[]" value="Delhi">Jaipur</label>
</div>

<select name="countries[]" multiple>
    <option value="china">India</option>
    <option value="America">Delhi</option>
    <option value="Taiwan">Shri Lanka</option>
    <option value="Russia">Russia</option>
   </select>

   <button>Update</button>
</form>
<?php
include('footer.php');
?>