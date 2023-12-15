<?php

// Fonction pour mélanger un tableau associatif
function melangerTableauAssociatif($tableau)
{
    // Extraire les clés et les valeurs du tableau
    $cles = array_keys($tableau);
    $valeurs = array_values($tableau);

    // Utiliser la fonction shuffle pour mélanger les valeurs
    shuffle($valeurs);

    // Reconstruire le tableau associatif avec les clés d'origine et les nouvelles valeurs mélangées
    $tableauMelange = array_combine($cles, $valeurs);

    return $tableauMelange;
}

// Tableau associatif d'échantillon
$tableauAssociatif = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);

// Appeler la fonction pour mélanger le tableau associatif
$tableauMelange = melangerTableauAssociatif($tableauAssociatif);

// Afficher le tableau mélangé
echo "Tableau associatif mélangé :\n";
foreach ($tableauMelange as $cle => $valeur) {
    echo "$cle: $valeur\n";
}

?>
