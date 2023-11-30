<?php

class Impot {
    private $nom;
    private $revenu;
    private $dateNaissance;
    private $taxeInf15000 = 0.09;
    private $taxeSup15000 = 0.14;

    public function __construct($nom, $dateNaissance, $revenu)
    {
        $this-> nom = $nom;
        $this-> dateNaissance =$dateNaissance;
        $this-> revenu = $revenu;
    }

    public 
    public function calculImpot($revenu) {
        if($revenu <= 15000) {
            return $impot = $revenu * TAUX_INF_15000;
        }
        else {
            $moins15000 = 15000 * TAUX_INF_15000;
            $plus15000 = ($revenu - 15000) * TAUX_SUP_15000;
            return $impot = $moins15000 + $plus15000;
        }
    }
}
?>

echo 