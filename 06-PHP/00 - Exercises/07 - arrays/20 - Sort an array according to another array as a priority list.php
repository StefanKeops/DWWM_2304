<?php

// Fonction pour trier un tableau selon une liste de priorités
function trierSelonPriorite($tableau, $priorite)
{
    // Utiliser uksort pour trier le tableau en fonction de la priorité
    uksort($tableau, function ($a, $b) use ($priorite) {
        $prioriteA = array_search($a, $priorite);
        $prioriteB = array_search($b, $priorite);

        // Si la priorité n'est pas définie dans le tableau de priorité, conserver l'ordre d'origine
        if ($prioriteA === false && $prioriteB === false) {
            return 0;
        }

        // Si la priorité de l'élément A est définie mais pas B, mettre A avant B
        if ($prioriteA !== false && $prioriteB === false) {
            return -1;
        }

        // Si la priorité de l'élément B est définie mais pas A, mettre B avant A
        if ($prioriteA === false && $prioriteB !== false) {
            return 1;
        }

        // Comparer les priorités
        return $prioriteA - $prioriteB;
    });

    return $tableau;
}

// Tableau d'échantillon à trier
$tableau = array("orange", "apple", "banana", "grape");

// Tableau de priorité
$priorite = array("banana", "apple", "grape", "orange");

// Appeler la fonction pour trier le tableau selon la priorité
$tableauTriee = trierSelonPriorite($tableau, $priorite);

// Afficher le résultat
echo "Tableau trié selon la priorité : " . implode(', ', $tableauTriee);

?>
