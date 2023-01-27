<?php

// on inclut le code de bootstrap.php
require_once __DIR__.'/bootstrap.php';

require_once __dir__."/donnees.php";

$orleans          = $boutiques["orleans"];


$promos         = $orleans["lotspromo"];
$images         = $orleans["themeimage"];

$classic        = $orleans["themes"]["classic"];
$art            = $orleans["themes"]["art"];
$brickheadz     = $orleans["themes"]["brickheadz"];

$personnel      = $orleans["personnel"];
$horaires       = $orleans["horaires"];

$reseaux        = $orleans["reseaux"];

echo $twig->render('boutique-orleans.twig.html', 
    [
        'title'         => $titreorleans,
        'orleans'       => $orleans, 
        'promos'        => $promos, 
        'images'        => $images, 
        'classic'       => $classic, 
        'art'           => $art, 
        'brickheadz'    => $brickheadz, 
        'personnel'     => $personnel, 
        'horaires'      => $horaires,
        'reseaux'       => $reseaux
    ]  );

?>