<?php


$nbMsg = 105;

if ($nbMsg > 50) {
    echo "Utilisateur VIP";
} else {
    echo "Utilisateur débutant";
}

$score = 5;

if  ($score > 10) {
    $message = "Vous avez gagné";
} else {
    $message = "Vous avez perdu";
}
// if ternaire
$message = ($score > 10) ? "Vous avez gagné" : "Vous avez perdu";

echo $message;