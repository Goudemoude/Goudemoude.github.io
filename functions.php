<?php

function verifier_employes($boutique){
   $nb_employes = count($boutique['personnel']);

   if ($nb_employes <= 10 and $nb_employes >= 3){
    return true;
   }
   else{
       return false;
   }
};



function verifier_coordonnees($boutique){

    if ( isset($boutique['coordonnees']) and isset($boutique['codepostal']) ) {
            return true;
    }
    else {
        return false;
    }
};



function verifier_horaire($boutique){
    $horaires = $boutique['horaires'];

    if ( isset($horaires['lundi']) and isset($horaires['mardi']) and isset($horaires['mercredi']) and isset($horaires['jeudi']) and isset($horaires['vendredi']) and isset($horaires['samedi']) and isset($horaires['dimanche']) ) {
            return true;
    }
    else {
        return false;
    }
};



function verifier_themes_lego($boutique){
    $nb_themes = count($boutique['themes']);
 
    if ($nb_themes > 2){
     return true;
    }
    else{
        return false;
    }
 };

 ?>


