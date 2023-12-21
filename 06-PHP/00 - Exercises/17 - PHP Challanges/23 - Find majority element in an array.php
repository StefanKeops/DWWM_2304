<?php

function trouverElementMajoritaire($tableau)
{
    $nombreElements = count($tableau);
    $majoritaire = null;
    $compteur = 0;

    foreach ($tableau as $element) {
        if ($compteur == 0) {
            // Nouvel élément candidat majoritaire
            $majoritaire = $element;
            $compteur = 1;
        } elseif ($element == $majoritaire) {
            // Incrémenter le compteur si l'élément actuel est égal à l'élément majoritaire candidat
            $compteur++;
        } else {
            // Décrémenter le compteur si l'élément actuel est différent de l'élément majoritaire candidat
            $compteur--;
        }
    }

    // Vérifier si l'élément majoritaire est réellement majoritaire
    $occurrencesMajoritaire = array_count_values($tableau)[$majoritaire];
    return ($occurrencesMajoritaire > $nombreElements / 2) ? $majoritaire : null;
}

// Exemple d'utilisation :
$tableauEntree = [1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6];
$elementMajoritaire = trouverElementMajoritaire($tableauEntree);

echo "Tableau d'entrée : [" . implode(", ", $tableauEntree) . "]\n"; echo "<br>";

if ($elementMajoritaire !== null) {
    echo "Élément majoritaire : $elementMajoritaire\n"; echo "<br>";
} else {
    echo "Pas d'élément majoritaire dans le tableau.\n"; echo "<br>";
}
?>
