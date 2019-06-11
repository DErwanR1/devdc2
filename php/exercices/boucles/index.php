<?php

/*
 * BOUCLE WHILE
 */


$compteur = 3;
while ($compteur > 0) {
//    concaténation nombre et renvoi à la ligne
    echo $compteur . "<br>";
    $compteur--;
 }

echo "Bonne année !";


// Trait pour séparer les exemples
echo "<hr>";



/*
 * BOUCLE FOR
 */

for($compteur = 3; $compteur > 0; $compteur--) {
    echo $compteur . "<br>";
}

echo "Bonne année!";

echo "<hr>";



?>

<!DOCTYPE html>
<html>
<head>
    <title>Forum</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
</head>
<body>


<?php

$note = 1;

for($i = 0; $i < 5; $i++) {
    if ($i < $note) {
        echo "<i class=\"fa fa-2x fa-border fa-star\" title=\"Plus de 100 messages\"></i>";
    } else {
        echo "<i class=\"fa fa-2x fa-border fa-star-o\" title=\"Moins de 50 messages\"></i>";
    }
}

echo "<hr>";
?>

</body>
</html>

<?php

/*
 * BOUCLE FOREACH
 */

$personnes = ["Elodie", "Jean", "Pierre"];

foreach ($personnes as $personne) {
    echo $personne;
}

echo "<br>";

// autre possibilité si on avait utilisé la boucle for
for ($i = 0; $i < count($personnes); $i++) {
    $personne = $personnes[$i];
    echo $personne;
}
echo "<hr>";