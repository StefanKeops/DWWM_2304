<?php

function arabicToRoman($number)
{
    if (!is_numeric($number) || $number < 1 || $number > 3999) {
        return "Invalid input. Please enter a number between 1 and 3999.";
    }

    $romanNumerals = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1
    );

    $result = '';

    foreach ($romanNumerals as $roman => $value) {
        $matches = intval($number / $value);
        $result .= str_repeat($roman, $matches);
        $number %= $value;
    }

    return $result;
}

// Exemples d'utilisation
$number1 = 354;
$number2 = 1998;

echo "Nombre : $number1, Chiffre romain : " . arabicToRoman($number1) . "\n"; echo "<br>";
echo "Nombre : $number2, Chiffre romain : " . arabicToRoman($number2) . "\n";

?>
