<?php

require_once __dir__."/functions.php";
require_once __dir__."/donnees.php";


foreach ($boutiques as $nom_ville => $boutique){

$test = verifier_employes($boutique);

if ($test == true){
    echo "il y a entre 3 et 10 employés à $nom_ville<br>";
}

else {
    echo "il n y a pas entre 3 et 10 employés à $nom_ville<br>";
    }
}



foreach ($boutiques as $nom_ville => $boutique){


    $test = verifier_coordonnees($boutique);

    if ($test == true){
        echo "$nom_ville a des coordonnées définies<br>";
    }

    else {
        echo "$nom_ville n'a pas de coordonnées définies<br>";
    }
}



foreach ($boutiques as $nom_ville => $boutique){


    $test = verifier_horaire($boutique);

    if ($test == true){
        echo "$nom_ville a des horaires définies toute la semaine<br>";
    }

    else {
        echo "$nom_ville n'a pas d'horaires définies toute la semaine<br>";
    }
}



foreach ($boutiques as $nom_ville => $boutique){


    $test = verifier_themes_lego($boutique);

    if ($test == true){
        echo " il y a au moins 2 thèmes a $nom_ville<br>";
    }

    else {
        echo "il a moins de 2 thèmes a $nom_ville<br>";
    }
}

//    count()
// $verifier_employes = $boutique['Blois']['employes'];
//     echo $verifier_employes

?>

