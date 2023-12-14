<?php

class Rectangle
{
    // Propriétés
    private $length;
    private $width;

    // Constructeur
    public function __construct($length, $width)
    {
        $this->setLength($length);
        $this->setWidth($width);
    }

    // Méthode pour définir la longueur
    public function setLength($length)
    {
        if ($length > 0) {
            $this->length = $length;
        } else {
            throw new Exception("La longueur doit être supérieure à zéro.");
        }
    }

    // Méthode pour obtenir la longueur
    public function getLength()
    {
        return $this->length;
    }

    // Méthode pour définir la largeur
    public function setWidth($width)
    {
        if ($width > 0) {
            $this->width = $width;
        } else {
            throw new Exception("La largeur doit être supérieure à zéro.");
        }
    }

    // Méthode pour obtenir la largeur
    public function getWidth()
    {
        return $this->width;
    }

    // Méthode pour calculer la surface du rectangle
    public function calculateArea()
    {
        return $this->length * $this->width;
    }

    // Méthode pour calculer le périmètre du rectangle
    public function calculatePerimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

// Exemple d'utilisation de la classe Rectangle
try {
    // Créer un rectangle avec une longueur de 5 et une largeur de 3
    $rectangle = new Rectangle(5, 3);

    // Afficher les propriétés
    echo "Longueur du rectangle : " . $rectangle->getLength() . "<br>";
    echo "Largeur du rectangle : " . $rectangle->getWidth() . "<br>";

    // Calculer et afficher la surface
    echo "Surface du rectangle : " . $rectangle->calculateArea() . "<br>";

    // Calculer et afficher le périmètre
    echo "Périmètre du rectangle : " . $rectangle->calculatePerimeter() . "<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
