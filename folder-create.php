<?php 
if(file_exists("images")){
    echo "Folder exists";
}else{
    mkdir("images");
    echo "Folder created";
}


?>