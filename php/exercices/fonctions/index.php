<?php

function bonjour(string $pseudo, bool $upper = false) : string {
    $message = "Bonjour $pseudo";
    if ($upper) {
        $message = strtoupper($message);
    }
    return $message;
}

/**
 * débugger une variable
 * @param $var Variable que l'on souhaite débugger
 * @param bool $die Arrêter l'exécution du code
 *
 * @author
 * @deprecated
 */
function debug($var, bool $die = false) : void {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

function average(array $tab) : float {
    return array_sum($tab) / count($tab) ;
}

$message = bonjour("Pierre", false);
echo $message;


$personnes = ["Pierre", "Etienne", "François"];

debug($personnes);
debug(new DateTime());


$notes = [10, 12, 15, 13, 12];

$moyenne = average($notes);
echo$moyenne;
echo "<br>";
echo average($personnes);
echo average([

]);
