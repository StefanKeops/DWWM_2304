<?php

// Fonction pour obtenir un tableau avec la première clé et sa valeur
function premiereCleEtValeur($tableau)
{
    // Utiliser la fonction each pour récupérer la première paire clé-valeur
    $premierePaire = each($tableau);

    // Créer un nouveau tableau avec la première clé et sa valeur
    $resultat = array($premierePaire['key'] => $premierePaire['value']);

    return $resultat;
}

// Tableau d'échantillon
$tableau = array("a" => 1, "b" => 2, "c" => 3);

// Appeler la fonction pour obtenir le tableau avec la première clé et sa valeur
$resultat = premiereCleEtValeur($tableau);

// Afficher le résultat
echo "Tableau avec la première clé et sa valeur :\n";
print_r($resultat);

?>
