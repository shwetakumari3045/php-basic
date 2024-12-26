<?php
$title =$_POST['title'];
$note =$_POST['note'];
$title =str_replace("","-",$title); 
$title =strtoupper($title);
$file =fopen("notes/$title.txt","r");
fwrite($file,$note);
echo "Note Saved"
?>