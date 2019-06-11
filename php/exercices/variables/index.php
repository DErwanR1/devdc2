<?php

// Déclarer des variables

$nom = 'Dupont'; // Variable de type string
$prenom = "Jean"; // Variable de type string
$message = 'J\'ai "compris" le PHP'; // Variable de type string
$age = 22; // Variable de type int
$taille = 1.80; // Variable de type float
$homme = true; // Variable de type bool
$profession = NULL; // Variable vide

$note1 = 18;
$note2 = 15;

$today = new DateTime("1989-06-29");

//constante
define("DB_HOST", "localhost");

/*phpinfo();

$message = $message . " C'est super";
$message .= " C'est super";

$age += 10;

echo 'Bonjour $prenom $nom';
echo "Bonjour $prenom $nom";
echo "Bonjour" . $prenom . $nom;
*/

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php echo "<h1>Hello world !</h1>"; ?>
<h1><?php echo "Hello world !"; ?></h1>
<h1>Hello world !</h1>

<ul>
    <li>Nom prénom : <? php echo $prenom . " " . $nom; ?></li>
    <li>Message : <?php echo $message; ?></li>
    <li>Age : <?php echo $age; ?></li>
    <li>Taille : <?= number_format($taille, 2, ","," "); ?></li>
    <li>Sexe : <?php echo $homme; ?></li>
    <li>Profession : <?php echo $profession; ?></li>
</ul>

<p>
Différence entre les deux notes : <?= abs($note2 - $note1); ?>
</p>

<p>
    Moyenne des deux notes : <?= ($note2 + $note1)/2; ?>
</p>


<p>
    Host <?php echo DB_HOST; ?>
</p>
</body>
</html>