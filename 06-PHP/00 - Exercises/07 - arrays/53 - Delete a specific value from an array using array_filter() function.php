<?php

// Fonction pour supprimer une valeur spécifique du tableau
function supprimerValeurDuTableau($tableau, $valeurASupprimer)
{
    // Utiliser la fonction array_filter pour filtrer les éléments du tableau en supprimant la valeur spécifiée
    $resultat = array_filter($tableau, function ($element) use ($valeurASupprimer) {
        return $element !== $valeurASupprimer;
    });

    return $resultat;
}

// Tableau d'échantillon
$tableau = array(1, 2, 3, 4, 2, 5, 6, 2, 7);

// Valeur à supprimer
$valeurASupprimer = 2;

// Appeler la fonction pour supprimer la valeur spécifique du tableau
$resultat = supprimerValeurDuTableau($tableau, $valeurASupprimer);

// Afficher le résultat
echo "Tableau après suppression de la valeur spécifique :\n";
print_r($resultat);

?>
