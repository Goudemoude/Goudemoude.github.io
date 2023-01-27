<?php

// on inclut le code de bootstrap.php
require_once __DIR__.'/bootstrap.php';

require_once __dir__."/donnees.php";

$blois          = $boutiques["blois"];


$promos         = $blois["lotspromo"];
$images         = $blois["themeimage"];

$architecture   = $blois["themes"]["architecture"];
$starwars       = $blois["themes"]["starwars"];
$monkiekid      = $blois["themes"]["monkiekid"];

$personnel      = $blois["personnel"];
$horaires       = $blois["horaires"];

$reseaux        = $blois["reseaux"];

echo $twig->render('boutique-blois.twig.html',
    [
        'title'         => $titreblois,
        'blois'         => $blois, 
        'promos'        => $promos, 
        'images'        => $images, 
        'architecture'  => $architecture, 
        'starwars'      => $starwars, 
        'monkiekid'     => $monkiekid, 
        'personnel'     => $personnel, 
        'horaires'      => $horaires,
        'reseaux'       => $reseaux
    ]  );

?>