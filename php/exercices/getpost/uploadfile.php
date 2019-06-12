<?php

print_r($_FILES);

$filename = $_FILES["image"]["name"] ;
$path = $_FILES["image"]["name"] ;

move_uploaded_file($path, "image/$filename");