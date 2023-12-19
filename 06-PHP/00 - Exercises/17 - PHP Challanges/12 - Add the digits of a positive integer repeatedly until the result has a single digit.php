<?php

function additionnerChiffresJusquASingleDigit($nombre)
{
    while ($nombre >= 10) {
        $nouveauNombre = 0;

        // Additionner les chiffres du nombre actuel
        while ($nombre > 0) {
            $nouveauNombre += $nombre % 10;
            $nombre = (int)($nombre / 10);
        }

        $nombre = $nouveauNombre;
    }

    return $nombre;
}

// Exemple d'utilisation :
$nombreEntree = 48;
$resultat = additionnerChiffresJusquASingleDigit($nombreEntree);

echo "Nombre en entrée : $nombreEntree\n"; echo "<br>";
echo "Résultat : $resultat\n"; echo "<br>";
