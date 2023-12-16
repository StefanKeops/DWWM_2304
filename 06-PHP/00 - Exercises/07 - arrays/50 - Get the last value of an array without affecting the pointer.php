<?php

// Fonction pour obtenir la dernière valeur d'un tableau sans affecter le pointeur
function derniereValeurSansAffecterPointeur($tableau)
{
    // Utiliser end() pour pointer vers la dernière valeur sans affecter le pointeur
    $derniereValeur = end($tableau);

    return $derniereValeur;
}

// Tableau d'échantillon
$tableau = array("a", "b", "c", "d", "e");

// Appeler la fonction pour obtenir la dernière valeur sans affecter le pointeur
$derniereValeur = derniereValeurSansAffecterPointeur($tableau);

// Afficher le résultat
echo "Dernière valeur du tableau : " . $derniereValeur . "\n";

// Afficher le tableau pour montrer que le pointeur n'a pas été affecté
echo "Tableau après l'appel de la fonction : ";
print_r($tableau);

?>
