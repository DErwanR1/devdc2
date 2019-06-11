<?php

require_once __DIR__ . "/model/database.php";

// Stock la requête SQL dans une variable
$recipes = getAllRows("recipe");

/* Préparer la requête SQL
$stmt = $connection->prepare($query);
$stmt->execute(); // Executer la requête
// Récupérer l'ensemble des résultats de la requête
$recipes = $stmt->fetchAll();
echo "<pre>";
print_r($recipes);
echo "</pre>";
*/
require_once __DIR__ . "/layout/header.php";
?>


<h1>Découvrez nos <?php echo count($recipes); ?> recettes.</h1>


<!-- Même chose que ci-dessus avec Boucle foreach pour parcourir le tableau des recettes -->
<?php foreach($recipes as $key => $recipe) : ?>

    <?php include __DIR__ . "/include/recipe_inc.php"; ?>
    <?php if ($key + 1 > count($recipe)) : ?>
    <hr>
    <?php endif; ?>
<?php endforeach; ?>


<?php require_once __DIR__ . "/layout/footer.php"; ?>