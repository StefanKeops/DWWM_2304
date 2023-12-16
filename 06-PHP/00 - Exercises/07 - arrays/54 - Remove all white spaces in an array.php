<?php

// Fonction pour supprimer tous les espaces blancs d'un tableau
function supprimerEspacesBlancsDuTableau($tableau)
{
    // Utiliser la fonction array_map pour appliquer la fonction trim à chaque élément du tableau
    $tableauSansEspacesBlancs = array_map('trim', $tableau);

    // Utiliser la fonction array_filter pour supprimer les éléments vides du tableau
    $tableauSansEspacesVides = array_filter($tableauSansEspacesBlancs);

    return $tableauSansEspacesVides;
}

// Tableau d'échantillon avec espaces blancs
$tableau = array("   Hello  ", " World ", " PHP   ");

// Appeler la fonction pour supprimer les espaces blancs du tableau
$resultat = supprimerEspacesBlancsDuTableau($tableau);

// Afficher le résultat
echo "Tableau après suppression des espaces blancs :\n";
print_r($resultat);

?>
