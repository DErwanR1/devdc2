<?php
//on créé la variable categorie et on affiche ses lignes de tableau
$categories = getAllRows("category");
?>

</main>

    <footer class="site-footer">
        <div class="container">
Copyright © 2013 Ecolidaire
<!--on fait un boucle pour afficher toutes les lignes
     //on fait le lien url qui changera en fonction de l'id
     categorie contient toute les lignes et chaque tour de boucle il affiche une catergory-->
     <?php foreach ($categories as $category) : ?>
         <a href="category.php?id=<?= $category["id"]; ?>">
            <?= $category["label"]; ?>
         </a>
     <?php endforeach; ?>
            <form method="post" action="insert-category.php">
                <input type="text" name="label" placeholder="categories">

                <input type="submit">
            </form>
</div>
    </footer>

</body>
</html>