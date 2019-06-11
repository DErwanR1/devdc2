<?php
require_once __DIR__ . "/../config/parameters.php";

try {$connection = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST,DB_USER, DB_PASS, [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4', lc_time_names = 'fr_FR'",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de donnée";
}catch (Exception $exception) {
    echo "Erreur inconnue";
    exit;
}

// Création de la connexion à la base de données faire une concaténation +
// require pour indiqué ou se trouvent les élément de connexions - name et host sont dans la même chaine de caratères
// le point concaténation et la virgule pour passer au paramètre suivant.

/**
 * récupérer l'ensemble des lignes d'une table
 * @param string $table Nom de la table
 * @param int $limit Nombre de ligne à retourner
 * @return array Liste des données retournées
 */

function getAllRows(string $table, int $limit = 0): array {
    global $connection;

    //stock la requête dans une variable
    $query = "SELECT * FROM $table";
    if ($limit > 0) {
        $query = $query . "LIMIT $limit";
    }

    //préparer la requête SQL
    $stmt = $connection->prepare($query);
    $stmt->execute();

    //récuperer l'ensemble des résultat de la requête
    return $stmt->fetchAll();
}

//getAllRows(int ou nomdevar);

// pour faire la liaison avec la database, cliquer sur la requête + ampoule (configure data source) + Mysql
// host localhost - port 8889 - user root - database = mettre le même nom que dans mysql
// utiliser la bonne version de mysql et driver et php
// pour tester les requêter utiliser clic droit execute depuis la requête mysql
// int = $limit = 0 <- valeur par défaut à changer dans l'index

function getAllProjects(int $id = null, int $limit = 0) {
    global $connection;

    $query = "  
        SELECT 
            project.*,
            DATE_FORMAT(project.date_start, '%d/%m/%Y') AS date_start_format,
            category.label AS category,
            COUNT(phm.member_id) AS nb_members
        FROM project
        INNER JOIN category ON project.category_id = category.id
        LEFT JOIN project_has_member phm ON project.id = phm.project_id
    ";

    //si l'identifiant d'un projet est défini, on ajoute une clause WHERE
    if ($id != null) {
        $query .= " WHERE project.id = $id";
    }

    $query .= " GROUP BY project.id
                ORDER BY project.date_start DESC";
// si la limite du nomre de lignes est supérieur àà zero on rajoute une clause LIMIT
    if ($limit > 0) {
        $query .= " LIMIT $limit";
    }

        $stmt = $connection->prepare($query);
        $stmt ->execute();

        // si la requete ne retourne qu'une seule ligne la fonction ne renvoi qu'une seule ligne
        if ($id != null) {
            return $stmt->fetch();
        } else {
            return $stmt -> fetchAll();
        }
}

/**
 * récupérer une lignes d'une table
 * @param string $table Nom de la table
 * @param int $limit Nombre de ligne à retourner
 * @return array Liste des données retournées
 */

function getOneRow (string $table, int $id) : array {
    global $connection;

    $query = "SELECT * FROM $table WHERE id = :id";


    $stmt = $connection->prepare($query);
    $stmt ->bindParam(":id", $id);
    $stmt ->execute();

    return $stmt -> fetch();

}


function getAllMembersByProject(int $id) : array {
    global $connection;

    $query = "SELECT *
            FROM member
INNER JOIN project_has_member AS phm ON member.id = phm.member_id
WHERE phm.project_id = $id
";

    $stmt = $connection->prepare($query);
    $stmt ->execute();

        return $stmt -> fetchAll();

}

function getAllProjectsByCategory(int $id ) array {
    global $connection;

    $query = "  
        SELECT 
            project.*,
            DATE_FORMAT(project.date_start, '%d/%m/%Y') AS date_start_format,
            category.label AS category,
            COUNT(phm.member_id) AS nb_members
        FROM project
        INNER JOIN category ON project.category_id = category.id
        LEFT JOIN project_has_member phm ON project.id = phm.project_id
        WHERE category.id = :id
        GROUP BY project.id
        ORDER BY project.date_start DESC
    ";

    $stmt = $connection->prepare($query);
    $stmt ->execute();

    return $stmt -> fetchAll();
// model - vue  - controleur (lien entre les deux)