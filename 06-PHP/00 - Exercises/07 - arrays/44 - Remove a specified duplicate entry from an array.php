<?php

// Fonction pour supprimer une entrée en double spécifiée d'un tableau
function supprimerDoublonSpecifie($tableau, $valeurADoublonner)
{
    // Utiliser la fonction array_keys pour obtenir les clés de l'entrée en double spécifiée
    $clesDoublon = array_keys($tableau, $valeurADoublonner);

    // Supprimer l'entrée en double spécifiée en utilisant les clés
    foreach ($clesDoublon as $cle) {
        unset($tableau[$cle]);
    }

    return $tableau;
}

// Tableau d'échantillon
$tableau = array("a", "b", "c", "a", "d", "e", "a");

// Valeur à supprimer en double
$valeurDoublon = "a";

// Appeler la fonction pour supprimer la valeur en double spécifiée
$tableauModifie = supprimerDoublonSpecifie($tableau, $valeurDoublon);

// Afficher le tableau modifié
echo "Tableau après suppression du doublon spécifié :\n";
print_r($tableauModifie);

?>
