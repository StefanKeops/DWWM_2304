<?php
// Chemin vers le fichier texte
$cheminFichier = 'fichier.txt';

// Vérifier si le fichier existe
if (file_exists($cheminFichier)) {
    // Lire le contenu du fichier dans un tableau
    $lignes = file($cheminFichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Compter le nombre de lignes
    $nombreDeLignes = count($lignes);

    // Afficher le résultat
    echo "Le fichier a $nombreDeLignes ligne(s).";
} else {
    echo "Le fichier n'existe pas.";
}
?>
