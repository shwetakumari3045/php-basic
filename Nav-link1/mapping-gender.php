<?php
 $pageTitle = "Numberic-Array";
 include("header.php");
?>
<br>

<?php
$users =array(
    array("name"=>"Mohit Sharma","gender"=>"male"),
    array("name"=>"Anuradha","gender"=>"Female"),
    array("name"=>"punit Sharma","gender"=>"male"),
    array("name"=>"Payal","gender"=>"Female"),
);
function buildname($item){
    if($item['gender']=="male"){
        return"Mr.".$item['name'];
    }else{
        return"Mrs.".$item['name'];
    }
   }
   $item =array_map("buildname",$users);
   var_dump($item);

?>
  

    <?php
    include("footer.php")
    ?>