<?php
$countries = ["France", "Espagne", "Italie"];
?>

<ul>
    <?php foreach ($countries as $country) : ?>
        <li>
            <a href="pays.php?nom=<?= $country; ?>">
                <?= $country; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<form method="post" action="traitement.php">
    <input type="text" name="firstname" placeholder="Prénom">
    <input type="text" name="lastname" placeholder="Nom">
    <select name="civilite">
        <option value="M.">Monsieur</option>
        <option value="Mme">Madame</option>
    </select>

    <input type="checkbox" id="football" name="sport[]" value="football">
    <label for="football">Football</label>
    <input type="checkbox" id="basketball" name="sport[]" value="basketball">
    <label for="basketball">Basketball</label>
    <input type="checkbox" id="tennis" name="sport[]" value="tennis">
    <label for="tennis">Tennis</label>

    <input type="color" name="color">

    <input type="submit">
</form>

<form action="uploadfile.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/*">
    <input type="submit">
</form>
