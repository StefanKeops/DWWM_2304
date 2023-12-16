<?php

// Fonction pour obtenir les entrées avec des clés présentes dans un autre tableau
function entréesAvecClés($tableauPrincipal, $clésAutorisées)
{
    // Utiliser la fonction array_intersect_key pour obtenir les entrées avec les clés autorisées
    $resultat = array_intersect_key($tableauPrincipal, array_flip($clésAutorisées));

    return $resultat;
}

// Tableau principal
$tableauPrincipal = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);

// Tableau de clés autorisées
$clésAutorisées = array("a", "c", "e");

// Appeler la fonction pour obtenir les entrées avec les clés autorisées
$resultat = entréesAvecClés($tableauPrincipal, $clésAutorisées);

// Afficher le résultat
echo "Entrées avec les clés autorisées :\n";
print_r($resultat);

?>
