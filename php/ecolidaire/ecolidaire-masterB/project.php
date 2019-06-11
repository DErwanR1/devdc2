<?php
require_once __DIR__ . "/model/database.php";
//refaire les links database / header / footer

//récupère les données de l'url
$id = $_GET ["id"];
$project = getAllProjects($id);
$members = getAllMembersByProject($id);

require_once __DIR__ . "/layout/header.php";
?>

<h1><?= $project[0]["title"]; ?></h1>
<p>
    Catégorie : <a href="category.php?id=<?= $project["category_id"] ; ?>"><?= $project["category"] ; ?></a>
</p>
<h2><?= $project["nb_members"]; ?> membres sur le projet</h2>
<ul>
    <?php foreach ($members as $member) : ?>
    <li>
        <?= $member["firstname"] ; ?>
        <?= $member ["lastname"] ; ?>
    </li>
    <?php endforeach ; ?>
</ul>
<?php
require_once __DIR__ . "/layout/footer.php";
?>