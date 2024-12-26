<?php
$title =$_POST['title'];
$note =$_POST['note'];
$title =str_replace("","-",$title); 
$title =strtolower($title);
$file =fopen("notes/$title.txt","w");
fwrite($file,$note);
echo "Note Saved"
?>