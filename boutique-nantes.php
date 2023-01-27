<?php

// on inclut le code de bootstrap.php
require_once __DIR__.'/bootstrap.php';

require_once __dir__."/donnees.php";

$nantes          = $boutiques["nantes"];


$promos         = $nantes["lotspromo"];
$images         = $nantes["themeimage"];

$ninjago        = $nantes["themes"]["ninjago"];
$icons          = $nantes["themes"]["icons"];
$minecraft      = $nantes["themes"]["minecraft"];

$personnel      = $nantes["personnel"];
$horaires       = $nantes["horaires"];

$reseaux        = $nantes["reseaux"];

echo $twig->render('boutique-nantes.twig.html', 
    [
        'title'         => $titrenantes,
        'nantes'        => $nantes, 
        'promos'        => $promos, 
        'images'        => $images, 
        'ninjago'       => $ninjago, 
        'icons'         => $icons, 
        'minecraft'     => $minecraft, 
        'personnel'     => $personnel, 
        'horaires'      => $horaires,
        'reseaux'       => $reseaux
    ]  );

?>