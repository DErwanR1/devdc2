<?php

$personnes = ["Pierre", "Eric", "Antoine"];

// ajouter une personne en 4ème position
$personnes[3] = "François";

// ajouter une personne à la fin du tableau
$personnes[] = "Jean";

// supprimer Antoine
$personnes[2] = null;

$etudiant = [
    "nom" => "Jehan",
    "prenom" => "Pierre",
    "dateNaissance" => new DateTime("1989-06-29")
];

echo "<pre>";
print_r($etudiant);
echo "</pre>";

//echo $personnes[0];
echo $etudiant["dateNaissance"]->format("d/m/Y");