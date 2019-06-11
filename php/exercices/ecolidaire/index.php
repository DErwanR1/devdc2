<?php

require_once __DIR__ . "/model/database.php";

require_once __DIR__ . "/layout/header.php";

require_once __DIR__ . "/layout/menu.php";

require_once __DIR__ . "/config/parameters.php";

?>

    <main>

        <header class="home-banner">
            <h1>Bienvenue sur <strong>Ecolidaire</strong></h1>
            <p>Let's go Green!</p>
        </header>

        <section class="container">
            <h2>Nos dernières actions</h2>
            <div class="actions">
                <article class="action">
                    <a href="#">
                        <img src="images/action-01.png" alt="Recyclage eaux">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag">55 000 €</div>
                                <h3>Recyclage eaux</h3>
                            </div>
                            <div class="more-info">
                                <div class="action-info">
                                    <i class="fa fa-calendar"></i>
                                    12/06/2017
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-tag"></i>
                                    Eau
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-users"></i>
                                    8
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
                <article class="action">
                    <a href="#">
                        <img src="images/action-02.png" alt="Panneaux solaires">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag">90 000 €</div>
                                <h3>Panneaux solaires</h3>
                            </div>
                            <div class="more-info">
                                <div class="action-info">
                                    <i class="fa fa-calendar"></i>
                                    10/08/2017
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-tag"></i>
                                    Solaire
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-users"></i>
                                    5
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
                <article class="action">
                    <a href="#">
                        <img src="images/action-03.png" alt="Plantation d'arbres">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag">50 000 €</div>
                                <h3>Plantation d'arbres</h3>
                            </div>
                            <div class="more-info">
                                <div class="action-info">
                                    <i class="fa fa-calendar"></i>
                                    22/08/2017
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-tag"></i>
                                    Reforestation
                                </div>
                                <div class="action-info">
                                    <i class="fa fa-users"></i>
                                    3
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
            </div>
        </section>

    </main>
<?php require_once __DIR__ . "/layout/footer.php"; ?>