<?php
$valeur = 0 ;

for ($valeur = 1 ; $valeur <= 100 ; $valeur++) {

if ($i % 3 == 0) {
    $output .= "fiiz";
}
if ($i % 5 == 0) {
    $output .= "buzz";
}
if ($output == "") {
    $output = $i;
}
echo "<p>$output</p>";
}



//    if ($valeur % 3 == 0 && $valeur % 5 == 0)
//        echo 'fizzbuzz';
//    } else if ($valeur % 3 == 0) {
//        echo 'fizz';
//    } else {
//        if ($valeur % 5 == 0)
//            echo 'buzz';
//    } else if {
//
//    }
//    echo "<br>";
//}
// $output = "";