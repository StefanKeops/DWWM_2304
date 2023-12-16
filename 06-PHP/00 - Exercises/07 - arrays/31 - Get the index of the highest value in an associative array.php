<?php

// Fonction pour obtenir l'index de la valeur la plus élevée dans un tableau associatif
function indexValeurPlusElevee($tableauAssociatif)
{
    // Vérifier si le tableau est vide
    if (empty($tableauAssociatif)) {
        return null; // Retourner null si le tableau est vide
    }

    // Utiliser la fonction array_keys pour obtenir les clés du tableau associatif
    $cles = array_keys($tableauAssociatif);

    // Utiliser la fonction array_values pour obtenir les valeurs du tableau associatif
    $valeurs = array_values($tableauAssociatif);

    // Utiliser la fonction array_search pour trouver l'index de la valeur la plus élevée
    $indexValeurPlusElevee = array_search(max($valeurs), $valeurs);

    // Retourner l'index correspondant à la clé associée
    return $cles[$indexValeurPlusElevee];
}

// Tableau associatif d'échantillon
$tableauAssociatif = array(
    "A" => 10,
    "B" => 25,
    "C" => 15,
    "D" => 30
);

// Appeler la fonction pour obtenir l'index de la valeur la plus élevée
$indexPlusEleve = indexValeurPlusElevee($tableauAssociatif);

// Afficher l'index et la valeur correspondante
echo "Index de la valeur la plus élevée : $indexPlusEleve\n";
echo "Valeur correspondante : " . $tableauAssociatif[$indexPlusEleve] . "\n";

?>
