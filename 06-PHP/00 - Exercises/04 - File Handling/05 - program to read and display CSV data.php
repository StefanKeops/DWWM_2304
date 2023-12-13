<?php
// Chemin vers le fichier CSV
$cheminFichierCSV = 'fichier.csv';

// Vérifier si le fichier existe
if (file_exists($cheminFichierCSV)) {
    // Lire le contenu du fichier CSV dans un tableau
    $donnees = array_map('str_getcsv', file($cheminFichierCSV));

    // Afficher les données dans un tableau HTML
    echo "<table border='1'>";
    foreach ($donnees as $ligne) {
        echo "<tr>";
        foreach ($ligne as $cellule) {
            echo "<td>$cellule</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Le fichier CSV n'existe pas.";
}
?>
