 <?php
$file =fopen("demo-content.txt","r");
while(!feof($file)){
    // echo fgetc($file);
    echo fgets($file);
}
 ?>