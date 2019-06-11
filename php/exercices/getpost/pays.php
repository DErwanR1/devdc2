<?php
if (!isset($_GET["nom"])){
    echo "page 404!";
    exit;
}
$pays = $_GET["nom"];
?>

<h1><?= $pays; ?></h1>
 <!-- htmlentities -->-