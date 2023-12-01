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

    public function getNom() {
        return $this->nom;
    }

    public function getRevenu() {
        return $this->revenu;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getTaxeInf15000 () {
        return $this->taxeInf15000;
    }

    public function getTaxeSup15000() {
        return $this->taxeSup15000;
    }
    
    public function calculImpot() {
        if ($this->revenu <= 15000) {
            $impotAPaye = $this->revenu * $this->taxeInf15000;
        } else {
            $moins15000 = 15000 * $this->taxeInf15000;
            $plus15000 = ($this->revenu - 15000) * $this->taxeSup15000;
            $impotAPaye = $moins15000 + $plus15000;
        }
        return $impotAPaye;
    }
}

$impot = new Impot('Csaszar Stefan', '08-10-1979', 15000);
$impotAPaye = $impot->calculImpot();
echo $impot->getNom() . ' vous avez à payé ' . $impotAPaye . ' .';
?>