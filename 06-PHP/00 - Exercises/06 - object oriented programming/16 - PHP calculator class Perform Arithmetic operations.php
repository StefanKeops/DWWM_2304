<?php

// Classe Calculator
class Calculator
{
    // Propriété privée pour stocker le résultat
    private $result;

    // Constructeur pour initialiser le résultat à zéro
    public function __construct()
    {
        $this->result = 0;
    }

    // Méthode pour effectuer l'addition
    public function add($number)
    {
        $this->result += $number;
    }

    // Méthode pour effectuer la soustraction
    public function subtract($number)
    {
        $this->result -= $number;
    }

    // Méthode pour effectuer la multiplication
    public function multiply($number)
    {
        $this->result *= $number;
    }

    // Méthode pour effectuer la division
    public function divide($number)
    {
        if ($number != 0) {
            $this->result /= $number;
        } else {
            throw new Exception("Division par zéro impossible.");
        }
    }

    // Méthode pour obtenir le résultat actuel
    public function getResult()
    {
        return round($this->result, 2); // Résultat arrondi à deux décimales
    }
}

// Exemple d'utilisation
try {
    // Créer une instance de la classe Calculator
    $calculator = new Calculator();

    // Effectuer des opérations
    $calculator->add(5);
    $calculator->subtract(2);
    $calculator->multiply(3);
    $calculator->divide(2);

    // Afficher le résultat
    echo "Résultat final : " . $calculator->getResult() . "<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
