<?php

function trouverTripletsAvecSommeZero($tableau)
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

            if ($somme === 0) {
                $triplets[] = [$premier, $deuxieme, $troisieme];

                // Ignorer les doublons
                while ($gauche < $droite && $tableau[$gauche] === $deuxieme) {
                    $gauche++;
                }
                while ($gauche < $droite && $tableau[$droite] === $troisieme) {
                    $droite--;
                }
            } elseif ($somme < 0) {
                $gauche++;
            } else {
                $droite--;
            }
        }
    }

    return $triplets;
}

// Exemple d'utilisation :
$tableauEntree = [-1, 0, 1, 2, -1, -4];
$triplets = trouverTripletsAvecSommeZero($tableauEntree);

echo "Tableau en entrée : " . implode(", ", $tableauEntree) . "\n"; echo "<br>";

if (empty($triplets)) {
    echo "Aucun triplet trouvé avec une somme nulle.\n";
} else {
    echo "Triplets avec une somme nulle :\n";
    foreach ($triplets as $triplet) {
        echo "[" . implode(", ", $triplet) . "]\n";
    }
}
