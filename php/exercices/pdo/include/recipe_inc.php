<article>
    <h2><?= $recipe["title"]; ?></h2> <!-- Affichage du titre de la recette -->
    <p>Temps de préparation : <?= $recipe["preparation_time"]; ?></p> <!-- Affichage du temps de prépa de la recette -->
    <?php if ($recipe["cooking_time"] != "") : ?> <!-- Condition pour vérifier si la recette a un temps de cuisson -->
        <p>Temps de cuisson : <?= $recipe["cooking_time"]; ?></p> <!-- Affichage du temps de cuisson de la recette -->
    <?php endif; ?>
    <a href=""recipe.php?id="<?= $recipe["id"]; ?>"
    <?php if ($key + 1 < count($recipes)): ?>
        <hr>
    <?php endif; ?>
</article>