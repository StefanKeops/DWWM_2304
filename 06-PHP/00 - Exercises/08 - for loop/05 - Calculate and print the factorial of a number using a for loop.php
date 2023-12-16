<?php

// Fonction pour calculer le factoriel d'un nombre
function calculerFactoriel($nombre) {
    $factoriel = 1;

    // Utilisation d'une boucle for pour multiplier tous les entiers jusqu'au nombre
    for ($i = 1; $i <= $nombre; $i++) {
        $factoriel *= $i;
    }

    return $factoriel;
}

// Nombre pour lequel nous voulons calculer le factoriel
$nombre = 4;

// Appel de la fonction et affichage du résultat
echo "Le factoriel de $nombre est : " . calculerFactoriel($nombre);

?>
