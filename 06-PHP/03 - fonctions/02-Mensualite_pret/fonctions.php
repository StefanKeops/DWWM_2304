<?php
function CalculerMensualite(float $capital, float $taux, float $annees) : float

{
    $tauxMensuel = $taux / 1200;
    $nombreMois = $annees * 12;
    $q = pow((1+ $tauxMensuel), -$nombreMois);
    $mensualite = ($capital * $tauxMensuel) / (1 - $q);


    return $mensualite;
}

function CalculerAmortissement(float $capital, float $taux, float $annees)

{
    $tauxMensuel = $taux / 1200;
    $nombreMois = $annees * 12;
    $mensualite = CalculerMensualite($capital, $taux, $annees);

    $tableauAmortissement = array();

    $capitalRestant = $capital;

    for($mois = 1; $mois <= $nombreMois; $mois++) {
        $interets = $capitalRestant * $tauxMensuel;
        $partAmortissement = $mensualite - $interets;
        $capitalRestant -= $partAmortissement;

        $tableauAmortissement[] = array (
            'mois' => $mois,
            'interets' => $interets,
            'partAmortissement' => $partAmortissement,
            'capitalRestant' => abs($capitalRestant)
        );

    }



    return $tableauAmortissement;
}
?>