<?php
function afficherTailleFichier($cheminFichier) {
    // Vérifier si le fichier existe
    if (file_exists($cheminFichier)) {
        // Obtenir la taille du fichier en octets
        $tailleOctets = filesize($cheminFichier);

        // Tableau des unités de taille
        $unites = array('B', 'KB', 'MB', 'GB', 'TB');

        // Calculer la taille dans une unité lisible
        $tailleLisible = $tailleOctets > 0 ? round($tailleOctets / pow(1024, ($exp = floor(log($tailleOctets, 1024)))), 2) : 0;

        // Afficher la taille dans le format lisible par l'homme
        echo "Taille du fichier : $tailleLisible {$unites[$exp]}";
    } else {
        echo "Le fichier n'existe pas.";
    }
}

// Exemple d'utilisation
$cheminFichier = 'fichier.txt';
afficherTailleFichier($cheminFichier);
?>
