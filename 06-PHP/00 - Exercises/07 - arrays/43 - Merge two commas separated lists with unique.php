<?php

// Fonction pour fusionner deux listes séparées par des virgules avec des valeurs uniques
function fusionnerListes($liste1, $liste2)
{
    // Diviser les listes en tableaux
    $tableau1 = explode(',', $liste1);
    $tableau2 = explode(',', $liste2);

    // Fusionner les tableaux et obtenir les valeurs uniques
    $listeFusionnee = implode(',', array_unique(array_merge($tableau1, $tableau2)));

    return $listeFusionnee;
}

// Deux listes séparées par des virgules
$liste1 = "1,2,3,4,5";
$liste2 = "3,4,5,6,7";

// Appeler la fonction pour fusionner les listes avec des valeurs uniques
$listeFusionnee = fusionnerListes($liste1, $liste2);

// Afficher la liste fusionnée
echo "Liste fusionnée avec des valeurs uniques :\n";
echo $listeFusionnee;

?>
