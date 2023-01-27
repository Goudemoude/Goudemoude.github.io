<?php

// on inclut le code de bootstrap.php
require_once __DIR__.'/bootstrap.php';

require_once __dir__."/donnees.php";

$tours          = $boutiques["tours"];


$promos         = $tours["lotspromo"];
$images         = $tours["themeimage"];

$city           = $tours["themes"]["city"];
$creator3in1    = $tours["themes"]["creator3in1"];
$technic        = $tours["themes"]["technic"];

$personnel      = $tours["personnel"];
$horaires       = $tours["horaires"];

$reseaux        = $tours["reseaux"];

echo $twig->render('boutique-tours.twig.html', 
    [
        'title'         => $titretours,
        'tours'         => $tours, 
        'promos'        => $promos, 
        'images'        => $images, 
        'city'          => $city, 
        'creator3in1'   => $creator3in1, 
        'technic'       => $technic, 
        'personnel'     => $personnel, 
        'horaires'      => $horaires,
        'reseaux'       => $reseaux
    ]  );

?>