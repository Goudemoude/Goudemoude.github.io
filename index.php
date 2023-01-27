<?php

// on inclut le code de bootstrap.php
require_once __DIR__.'/bootstrap.php';
require_once __dir__."/donnees.php";

$blois          = $boutiques["blois"];
$nantes         = $boutiques["nantes"];
$orleans        = $boutiques["orleans"];
$tours          = $boutiques["tours"];



echo $twig->render('index.twig.html', 
    [
        'title'         => $titreaccueil,
        'blois'         => $blois,
        'nantes'        => $nantes,
        'orleans'       => $orleans,
        'tours'         => $tours
    ]  );

?>