<?php

// Fonction pour générer des nombres aléatoires uniques dans une plage
function genererNombresAleatoiresUniques($min, $max, $quantite)
{
    // Vérifier si la quantité demandée est inférieure à la plage
    if (($max - $min + 1) < $quantite) {
        return "La plage ne permet pas de générer autant de nombres uniques.";
    }

    $nombresUniques = array();

    // Générer des nombres aléatoires uniques
    while (count($nombresUniques) < $quantite) {
        $nombreAleatoire = mt_rand($min, $max);

        // Vérifier si le nombre est déjà dans le tableau
        if (!in_array($nombreAleatoire, $nombresUniques)) {
            $nombresUniques[] = $nombreAleatoire;
        }
    }

    return $nombresUniques;
}

// Plage d'échantillon
$plage = array(11, 20);

// Générer 5 nombres aléatoires uniques dans la plage
$resultat = genererNombresAleatoiresUniques($plage[0], $plage[1], 5);

// Afficher les résultats
echo "Nombres aléatoires uniques générés : " . implode(', ', $resultat);

?>
