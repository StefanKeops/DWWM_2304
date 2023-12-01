<?php

class Mensualite
{
    private $capital;
    private $annees;
    private $taux;

    public function __construct($capital, $annees, $taux)
    {
        $this->capital = $capital;
        $this->annees = $annees;
        $this->taux = $taux;
    }

    public function getCapital()
    {
        return $this->capital;
    }

    public function getAnnees()
    {
        return $this->annees;
    }

    public function getTaux()
    {
        return $this->taux;
    }

    public function CalculerMensualite($capital, $taux, $annees)
    {

        $tauxMensuel = $taux / 1200;
        $nombreMois = $annees * 12;
        $q = pow((1 + $tauxMensuel), -$nombreMois);
        $mensualite = ($capital * $tauxMensuel) / (1 - $q);

        return $mensualite;
    }

    public function CalculerAmortissement(float $capital, float $taux, float $annees)
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
}

$somme = new Mensualite($capital, $taux, $annees);
$mensualite = $somme->CalculerMensualite($capital, $taux, $annees);
echo 'Vous avez à paye une mensualité de' . $mensualite . ' .;'
?>