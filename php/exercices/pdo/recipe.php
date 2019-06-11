<?php
require_once __DIR__ . "/model/database.php";

$id = $_GET["id"];
$recipe = getOneRecipe($id); //SELECT * FROM recipe WhERE

require_once __DIR__ . "/layout/header.php";
?>
<section>
    <h1><?= $recipe ["title"]; ?></h1>
</section>

<?php require_once __DIR__ . "/layout/footer.php"; ?>

<!--clic droit execute voir la valuer d'un parametre dans phpstorm