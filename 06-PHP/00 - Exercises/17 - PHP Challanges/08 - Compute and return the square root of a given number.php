<?php

function calculerRacineCarree($nombre)
{
    if ($nombre < 0) {
        return "Impossible de calculer la racine carrée d'un nombre négatif.";
    }

    $resultat = sqrt($nombre);
    return $resultat;
}

// Exemple d'utilisation :
$nombreEntree = 16;
$racineCarree = calculerRacineCarree($nombreEntree);

echo "Nombre en entrée : $nombreEntree\n"; echo "<br>";
echo "Racine Carrée : $racineCarree\n";
