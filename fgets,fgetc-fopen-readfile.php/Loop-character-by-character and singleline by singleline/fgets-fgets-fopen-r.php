 <?php
$file =fopen("demo-content.txt","r");
while(!feof($file)){
// echo fgets($file);

echo fgetc($file);
}

 ?>