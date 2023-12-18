<?php

class FactorialCalculator
{
    public static function calculateFactorial($number)
    {
        if ($number < 0) {
            return "Le factoriel n'est défini que pour les entiers non négatifs.";
        }

        $result = 1;

        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }

        return $result;
    }
}

// Utilisation de la classe pour calculer le factoriel
$number = 5;
$result = FactorialCalculator::calculateFactorial($number);

echo "Le factoriel de $number est $result.\n";

?>
