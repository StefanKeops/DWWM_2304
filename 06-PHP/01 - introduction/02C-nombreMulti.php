<?php
function getMulti($a, $b) {
    $result = $a * $b;
    return number_format($result, 2, '.', '');
}

$resultat = getMulti(5.3, -4.2);
echo $resultat;
?>