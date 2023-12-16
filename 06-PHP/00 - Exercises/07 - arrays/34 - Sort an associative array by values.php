<?php

// Fonction pour trier un tableau associatif par valeurs
function trierTableauAssociatifParValeurs($tableauAssociatif)
{
    // Utiliser la fonction asort pour trier le tableau associatif par valeurs tout en maintenant les associations clé-valeur
    asort($tableauAssociatif);

    return $tableauAssociatif;
}

// Tableau associatif d'échantillon
$tableauAssociatif = array(
    "C" => "Orange",
    "A" => "Banana",
    "D" => "Apple",
    "B" => "Cherry"
);

// Appeler la fonction pour trier le tableau associatif par valeurs
$tableauTrie = trierTableauAssociatifParValeurs($tableauAssociatif);

// Afficher le tableau trié
echo "Tableau associatif trié par valeurs :\n";
print_r($tableauTrie);

?>
