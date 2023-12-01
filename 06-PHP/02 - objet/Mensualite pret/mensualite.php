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

    public function CalculerMensualite()
    {
        $tauxMensuel = $this->taux / 1200;
        $nombreMois = $this->annees * 12;
        $q = pow((1 + $tauxMensuel), -$nombreMois);
        $mensualite = ($this->capital * $tauxMensuel) / (1 - $q);

        return $mensualite;
    }

    public function CalculerAmortissement()
    {
        $tauxMensuel = $this->taux / 1200;
        $nombreMois = $this->annees * 12;
        $mensualite = $this->CalculerMensualite();

        $tableauAmortissement = array();
        $capitalRestant = $this->capital;

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

        // rata lunară și tabelul de amortizare
        return [
            'mensualite' => $mensualite,
            'tableauAmortissement' => $tableauAmortissement,
        ];
    }
}
?>