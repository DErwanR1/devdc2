<?php
require_once __DIR__ . "/model/database.php";
//refaire les links database / header / footer

//récupère les donnée de l'url
$id = $_GET ["id"];
$category = getOneRow("category" , $id);

require_once __DIR__ . "/layout/header.php";
?>

<section class=""container">
    <h1><?= $category["label"]; ?></h1>

<div class="action">
    <?php foreach ($projects as $project) : ?>
        <?php include __DIR__ . "/include/project_inc.php"; ?>
    <?php endforeach; ?>
</div>
</section>

<?php require_once __DIR__ . "/layout/footer.php"; ?>