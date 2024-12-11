<?php
 $pageTitle = "Numberic-Array";
 include("header.php");
?>

<h1>Index Array in PHP</h1>
<br>
 <!-- ---------------- INDEXED ARRAY----------- -->
<?php
$user =array("Priya", "Aditi", "Ananya", "Sanya", "Rhea","Isha", "Neha", "Pooja", "Tanya", "Sneha");

echo $user[2];
echo "<br>";
echo "<br>";
var_dump($user);
echo "<br>";
echo "<br>";

// ---------------------ASSOCIATIVE ARRAY------------------------------
$users =array("name"=>"Payal","email"=>"Payal@gmail.com");
echo $users["name"];
echo "<br>";
echo "<br>";
var_dump($users);
echo "<br>";
echo "<br>";
?>
<hr>
<hr>
<hr>
<hr>
<hr>

<?php
// -----------------------INDEXED MULTI DIMENSIONAL ARRAY-----------------------
$students = array(
  array("Priya", "Sharma"),
  array("Sanya", "Gupta")
);
$students = [1][0];

 

?>
    <?php
    include("footer.php")
    ?>