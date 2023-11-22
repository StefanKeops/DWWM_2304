<?php
function getToday() {
    $date = date('d/m/Y');
    return $date;
}
 
$resultat = getToday();
echo $resultat;
?>