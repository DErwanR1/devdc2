<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$civ = $_POST["civilite"];
$sports = $_POST["sport"];
$color = $_POST ["color"];

$fullname = $civ . " " . $firstname . " " . $lastname;

?>

<style>
    h1 {
        color: <?= $color; ?>;
    }
</style>

<script>
    alert('Bonjour <?= $fullname; ?>');
</script>

<h1><?= $fullname; ?></h1>

<ul>
    <?php foreach ($sports as $sport) : ?>
        <li><?= $sport; ?></li>
    <?php endforeach; ?>
</ul>