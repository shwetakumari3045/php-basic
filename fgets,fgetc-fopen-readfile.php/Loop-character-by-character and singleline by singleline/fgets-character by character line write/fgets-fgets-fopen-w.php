 <?php
$file =fopen("demo-content.txt","w");
while(!feof($file)){
    echo fgets($file);

    // echo fgetc($file);
}

 ?>