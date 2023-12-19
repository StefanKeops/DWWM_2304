<?php

function trouverTripletsAvecSommeDonnee($tableau, $sommeCible)
{
    $triplets = [];
    $longueur = count($tableau);

    for ($i = 0; $i < $longueur - 2; $i++) {
        $premier = $tableau[$i];

        // Vérifier les triplets en double
        if ($i > 0 && $premier === $tableau[$i - 1]) {
            continue;
        }

        $gauche = $i + 1;
        $droite = $longueur - 1;

        while ($gauche < $droite) {
            $deuxieme = $tableau[$gauche];
            $troisieme = $tableau[$droite];
            $somme = $premier + $deuxieme + $troisieme;

            if ($somme === $sommeCible) {
                $triplets[] = [$premier, $deuxieme, $troisieme];

                // Ignorer les doublons
                while ($gauche < $droite && $tableau[$gauche] === $deuxieme) {
                    $gauche++;
                }
                while ($gauche < $droite && $tableau[$droite] === $troisieme) {
                    $droite--;
                }
            } elseif ($somme < $sommeCible) {
                $gauche++;
            } else {
                $droite--;
            }
        }
    }

    return $triplets;
}

// Exemple d'utilisation :
$tableauEntree = [2, 7, 7, 1, 8, 2, 7, 8, 7];
$sommeCible = 16;
$triplets = trouverTripletsAvecSommeDonnee($tableauEntree, $sommeCible);

echo "Tableau en entrée : " . implode(", ", $tableauEntree) . "\n"; echo "<br>";
echo "Somme Cible : $sommeCible\n"; echo "<br>";

if (empty($triplets)) {
    echo "Aucun triplet trouvé avec la somme donnée.\n";
} else {
    echo "Triplets avec la somme donnée :\n";
    foreach ($triplets as $triplet) {
        echo "[" . implode(", ", $triplet) . "]\n";
    }
}
