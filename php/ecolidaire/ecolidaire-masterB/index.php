<?php
require_once __DIR__ . "/model/database.php";

$projects = getAllProjects(null,3);


require_once __DIR__ . "/layout/header.php" ; ?>

        <header class="home-banner">
            <h1>Bienvenue sur <strong>Ecolidaire</strong></h1>
            <p>Let's go Green!</p>
        </header>

<!--garder une seul section  foreach va boucler les élèments projects
projects est le resultat de la requete as project change la valeure a chaque tour de boucle-->
        <section class="container">
            <h2>Nos dernières actions</h2>
            <div class="actions">

                <?php foreach ($projects AS $project) : ?>
                <article class="action">
                    <a href="project.php?id=<?= $project["id"];?>">
                        <img src="images/"<?= $project["picture"] ; ?> alt="Recyclage eaux">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag"><?= number_format($project["price"],0,',',' '); ?> €</div>
                                <h3><?= $project["title"]; ?></h3>
                            </div>
                            <div class="more-info">
                                <div class="action-info">
                                    <i class="fa fa-calendar"></i>
                                    <?=$project["date_start_format"]; ?>
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-tag"></i>
                                    <?= $project["category"]; ?>
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-users"></i>
                                    <?= $project["nb_members"]; ?>

                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
    <?php endforeach; ?>

            </div>
        </section>

<?php require_once __DIR__ . "/layout/footer.php" ; ?>