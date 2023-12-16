<?php

// Nombre de lignes et de colonnes dans la table
$nombreLignes = 5;
$nombreColonnes = 3;

// Début de la balise de tableau avec les attributs cellpadding et cellspacing
echo '<table cellpadding="3px" cellspacing="0px">';

// Boucle externe pour les lignes
for ($i = 1; $i <= $nombreLignes; $i++) {
    echo '<tr>';

    // Boucle interne pour les colonnes
    for ($j = 1; $j <= $nombreColonnes; $j++) {
        echo '<td>';
        echo "Ligne $i, Colonne $j";
        echo '</td>';
    }

    echo '</tr>';
}

// Fin de la balise de tableau
echo '</table>';

?>
