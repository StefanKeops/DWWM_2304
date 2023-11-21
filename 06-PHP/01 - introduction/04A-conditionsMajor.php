<?php
function isMajor($age) {
    return $age >= 18;
}
 
$resultat1 = isMajor(12);
$resultat2 = isMajor(18);
$resultat3 = isMajor(42);
 
var_dump ($resultat1); echo'<br>';
var_dump ($resultat2); echo'<br>';
var_dump ($resultat3); 
?>