<?php 
if(isset($_FILES['image']['name'])!=null){
    $image_name = basename($_FILES['image']['name']);
    $size = $_FILES['image']['size'];
    $extension = pathinfo($image_name,PATHINFO_EXTENSION); //jpg
    $renamed =rand(11111,99999)."_user_image.".$extension;
    move_uploaded_file($_FILES['image']['tmp_name'],"images/".$renamed);
}
?>