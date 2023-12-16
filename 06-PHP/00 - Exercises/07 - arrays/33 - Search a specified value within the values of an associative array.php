<?php

// Fonction pour rechercher une valeur dans un tableau associatif
function rechercherValeurDansTableau($tableauAssociatif, $valeurRecherchee)
{
    // Utiliser la fonction in_array pour vérifier si la valeur recherchée existe dans les valeurs du tableau
    if (in_array($valeurRecherchee, $tableauAssociatif)) {
        // Retourner la clé correspondante si la valeur est trouvée
        return array_search($valeurRecherchee, $tableauAssociatif);
    } else {
        // Retourner null si la valeur n'est pas trouvée
        return null;
    }
}

// Tableau associatif d'échantillon
$tableauAssociatif = array(
    "A" => 10,
    "B" => 25,
    "C" => 15,
    "D" => 30
);

// Valeur à rechercher
$valeurRecherchee = 15;

// Appeler la fonction pour rechercher la valeur dans le tableau
$cleTrouvee = rechercherValeurDansTableau($tableauAssociatif, $valeurRecherchee);

// Afficher le résultat de la recherche
if ($cleTrouvee !== null) {
    echo "La valeur $valeurRecherchee a été trouvée avec la clé $cleTrouvee dans le tableau.\n";
} else {
    echo "La valeur $valeurRecherchee n'a pas été trouvée dans le tableau.\n";
}

?>
