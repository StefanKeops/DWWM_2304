<?php

// Classe Math
class Math
{
    // Méthode statique pour additionner deux nombres
    public static function add($a, $b)
    {
        return $a + $b;
    }

    // Méthode statique pour soustraire deux nombres
    public static function subtract($a, $b)
    {
        return $a - $b;
    }

    // Méthode statique pour multiplier deux nombres
    public static function multiply($a, $b)
    {
        return $a * $b;
    }
}

// Exemple d'utilisation
try {
    // Définir deux nombres
    $number1 = 10;
    $number2 = 5;

    // Appeler les méthodes statiques pour effectuer des calculs
    $resultAddition = Math::add($number1, $number2);
    $resultSubtraction = Math::subtract($number1, $number2);
    $resultMultiplication = Math::multiply($number1, $number2);

    // Afficher les résultats arrondis à deux décimales
    echo "Addition : " . round($resultAddition, 2) . "<br>";
    echo "Soustraction : " . round($resultSubtraction, 2) . "<br>";
    echo "Multiplication : " . round($resultMultiplication, 2) . "<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
