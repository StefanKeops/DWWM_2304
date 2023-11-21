<?php
function getDiv($a, $b) {
    if ($b!=0) {
        return $a / $b;
        return number_format($result, 2, '.', '');
    }
    else {
        return 0;
    }
}
 
$resultat = getDiv(20, 3);
echo $resultat;
?>