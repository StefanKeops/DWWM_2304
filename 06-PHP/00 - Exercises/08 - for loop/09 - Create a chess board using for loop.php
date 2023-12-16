<?php

// Dimensions
$largeurTable = 270;
$hauteurCellule = 30;
$largeurCellule = 30;

// Début de la balise de tableau avec les attributs de largeur et de cellspacing
echo "<table width=\"$largeurTable\" cellpadding=\"0\" cellspacing=\"0\">";

// Boucle externe pour les lignes
for ($i = 1; $i <= 8; $i++) {
    echo '<tr>';

    // Boucle interne pour les colonnes
    for ($j = 1; $j <= 8; $j++) {
        // Alterner les couleurs des cellules pour créer le motif d'échiquier
        $couleur = ($i + $j) % 2 == 0 ? 'white' : 'black';

        // Ajout de l'attribut de style aux cellules avec une bordure noire
        echo "<td style=\"width: {$largeurCellule}px; height: {$hauteurCellule}px; background-color: $couleur; border: 1px solid black;\"></td>";
    }

    echo '</tr>';
}

// Fin de la balise de tableau
echo '</table>';

?>
