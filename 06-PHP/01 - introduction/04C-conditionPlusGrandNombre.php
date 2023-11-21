<?php
function getMax($numero1, $numero2, $numero3) {
    $maxValue = max($numero1, $numero2, $numero3);
    $uniqueValues = array_unique([$numero1, $numero2, $numero3]);
 
    if (count($uniqueValues) == 1) {
        return 0;
    } else {
        return round($maxValue, 3);
    }
}

$resultat1 = getMax(3.215, 6.547, 9.873);
$resultat2 = getMax(5.432, 5.432, 5.432);
$resultat3 = getMax(11.101, 8.888, 54.321);
 
echo $resultat1; echo'<br>';
echo $resultat2; echo'<br>';
echo $resultat3; 
?>