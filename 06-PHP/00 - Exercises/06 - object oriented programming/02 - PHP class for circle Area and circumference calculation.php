<?php

class Circle
{
    // Propriété
    private $radius;

    // Constructeur
    public function __construct($radius)
    {
        $this->setRadius($radius);
    }

    // Méthode pour définir le rayon
    public function setRadius($radius)
    {
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            throw new Exception("Le rayon doit être supérieur à zéro.");
        }
    }

    // Méthode pour obtenir le rayon
    public function getRadius()
    {
        return $this->radius;
    }

    // Méthode pour calculer la surface du cercle
    public function calculateArea()
    {
         return round(M_PI * pow($this->radius, 2), 2);
    }

    // Méthode pour calculer la circonférence du cercle
    public function calculateCircumference()
    {
        return round(2 * M_PI * $this->radius, 2);
    }
}

// Exemple d'utilisation de la classe Circle
try {
    // Créer un cercle avec un rayon de 4
    $circle = new Circle(4);

    // Afficher la propriété
    echo "Rayon du cercle : " . $circle->getRadius() . "<br>";

    // Calculer et afficher la surface
    echo "Surface du cercle : " . $circle->calculateArea() . "<br>";

    // Calculer et afficher la circonférence
    echo "Circonférence du cercle : " . $circle->calculateCircumference() . "<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
