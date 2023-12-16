<?php

function convertirChaineEnTableau($chaine) {
    // Divise la chaîne en lignes
    $lignes = explode("\n", $chaine);

    // Supprime les espaces au début et à la fin de chaque ligne, et les lignes vides
    $lignesPropres = array_map('trim', $lignes);
    $lignesPropres = array_filter($lignesPropres, function($ligne) {
        return $ligne !== '';
    });

    // Réindexe le tableau pour avoir des indices continus
    $tableauFinal = array_values($lignesPropres);

    return $tableauFinal;
}

// Exemple d'utilisation
$chaine = "   Ligne 1

Ligne 2
Ligne 3   ";
$tableauResultat = convertirChaineEnTableau($chaine);

// Affiche le résultat
print_r($tableauResultat);

?>
