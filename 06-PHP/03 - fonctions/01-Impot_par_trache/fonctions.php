<?php
define('TAUX_INF_15000', 0.09);
define('TAUX_SUP_15000', 0.14);

function CalculImpot(float $revenu) :float

{
    if($revenu <= 15000) {
        $impot = $revenu * TAUX_INF_15000;
        return $impot;
    }
    else {
        $moins15000 = 15000 * TAUX_INF_15000;
        $plus15000 = ($revenu - 15000) * TAUX_SUP_15000;
        $impot = $moins15000 + $plus15000;
        return $impot;
    }
}
?>