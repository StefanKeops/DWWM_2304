<?php

// Interface Resizable
interface Resizable
{
    // Méthode pour redimensionner
    public function resize($factor);
}

// Classe Square implémentant l'interface Resizable
class Square implements Resizable
{
    // Propriété
    private $side;

    // Constructeur
    public function __construct($side)
    {
        $this->side = $side;
    }

    // Implémentation de la méthode pour redimensionner le carré
    public function resize($factor)
    {
        if ($factor > 0) {
            // Redimensionner le côté du carré
            $this->side *= $factor;
        } else {
            throw new Exception("Le facteur de redimensionnement doit être supérieur à zéro.");
        }
    }

    // Méthode pour obtenir le côté du carré
    public function getSide()
    {
        return $this->side;
    }

    // Méthode pour calculer la surface du carré
    public function calculateArea()
    {
        return round(pow($this->side, 2), 2);
    }
}

// Exemple d'utilisation de l'interface et de la classe
try {
    // Créer un carré avec un côté de 4
    $square = new Square(4);

    // Afficher le côté initial du carré
    echo "Côté du carré avant redimensionnement : " . $square->getSide() . "<br>";

    // Redimensionner le carré avec un facteur de 1.5
    $square->resize(1.5);

    // Afficher le côté après redimensionnement
    echo "Côté du carré après redimensionnement : " . $square->getSide() . "<br>";

    // Calculer et afficher la surface du carré
    echo "Surface du carré : " . $square->calculateArea() . "<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
