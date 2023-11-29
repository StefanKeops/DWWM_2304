<?php
function calculerMensualite($capital, $taux, $annees) {
    $tauxMensuel = $taux / 1200;
    $nombreMois = $annees * 12;
    $q = pow((1+ $tauxMensuel), -$nombreMois);
    $mensualite = ($capital * $tauxMensuel) / (1 - $q);


    return $mensualite;
}
?>