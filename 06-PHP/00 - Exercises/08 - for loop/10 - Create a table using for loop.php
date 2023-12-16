<?php

// Début de la balise de tableau
echo '<table border="1" cellpadding="5">';

// Boucle externe pour les lignes
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';

    // Boucle interne pour les colonnes
    for ($j = 1; $j <= 10; $j++) {
        // Calcul de la valeur dans la table (produit de $i et $j)
        $valeur = $i * $j;

        // Affichage de la cellule dans la table
        echo '<td>' . $valeur . '</td>';
    }

    echo '</tr>';
}

// Fin de la balise de tableau
echo '</table>';

?>
