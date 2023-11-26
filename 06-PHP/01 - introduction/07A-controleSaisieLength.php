<?php
function stringLength($chaine) {
    $longueur = strlen($chaine);
    return $longueur >= 9;
}

// Exemples d'utilisation
$resultat1 = stringLength("MotDePasseLong");
$resultat2 = stringLength("azer");

var_dump($resultat1); echo'<br>';
var_dump($resultat2); 
?>
