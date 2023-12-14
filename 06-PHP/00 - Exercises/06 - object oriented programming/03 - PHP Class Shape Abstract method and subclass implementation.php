<?php

// Classe abstraite Shape
abstract class Shape
{
    // Méthode abstraite pour calculer la surface
    abstract public function calculateArea();
}

// Sous-classe Triangle
class Triangle extends Shape
{
    // Propriétés
    private $base;
    private $height;

    // Constructeur
    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    // Implémentation de la méthode pour calculer la surface du triangle
    public function calculateArea()
    {
        return round(0.5 * $this->base * $this->height, 2);
    }
}

// Sous-classe Rectangle
class Rectangle extends Shape
{
    // Propriétés
    private $length;
    private $width;

    // Constructeur
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    // Implémentation de la méthode pour calculer la surface du rectangle
    public function calculateArea()
    {
        return round($this->length * $this->width, 2);
    }
}

// Exemple d'utilisation des classes
$triangle = new Triangle(4, 5);
$rectangle = new Rectangle(3, 6);

echo "Surface du triangle : " . $triangle->calculateArea() . "<br>";
echo "Surface du rectangle : " . $rectangle->calculateArea() . "<br>";

?>
