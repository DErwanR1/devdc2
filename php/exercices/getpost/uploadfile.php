<?php

print_r($_FILES);

$filename = $_FILES["image"]["name"] ;
$path = $_FILES["image"]["tmp_name"] ;
$type = $_FILES["image"]["type"] ;

if (substr_compare($type, "image/", 0, 6) !== 0) {
    echo "Que des images stp !!";
    exit;
}
move_uploaded_file($path, "images/$filename");