<?php

function estPremier($n) {
    // Vérifier si le nombre est inférieur à 2
    if ($n < 2) {
        return false;
    }

    // Vérifier les diviseurs potentiels jusqu'à la racine carrée du nombre
    for ($i = 2; $i <= sqrt($n); $i++) {
        // Si le nombre est divisible par un autre nombre que 1 et lui-même, ce n'est pas un nombre premier
        if ($n % $i == 0) {
            return false;
        }
    }

    // Si aucun diviseur n'a été trouvé, le nombre est premier
    return true;
}

// Exemple d'utilisation :
$nombre = 17; // Vous pouvez changer la valeur pour tester avec d'autres nombres

if (estPremier($nombre)) {
    echo "$nombre est un nombre premier.";
} else {
    echo "$nombre n'est pas un nombre premier.";
}

?>
