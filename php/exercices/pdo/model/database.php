<?php

// Création de la connexion à la base de données
$connection = new PDO("mysql:dbname=ma_cuisine;host=localhost", "root", "root", [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4', lc_time_names = 'fr_FR'",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

function getAllRows(string $table, int $limit = 0) : array {
    global $connection;
    $query = "SELECT * FROM $table";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getOneRecipe(int $id) : array {
    global $connection;

    $query = "SELECT * FROM recipe WHERE id = :id";
    $stmt = $connection -> prepare($query);
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();
    return $stmt -> fetch();
}

// model - vue  - controleur (lien entre les deux)