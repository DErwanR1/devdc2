<?php
require_once __DIR__ . "/model/database.php";
// récupérer les données du formulaire
    $pseudo = $_GET["pseudo"];
    $pseudo = $_GET["email"];
    $pseudo = $_GET["password"];

// Envoyer les données à la base de données
insertUser($pseudo, $email, $password);


// Rediriger l'utilisateur
header("Location: index.php");

