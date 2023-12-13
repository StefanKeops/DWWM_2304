<?php
function copierFichier($source, $destination) {
    // Vérifier si le fichier source existe
    if (file_exists($source)) {
        // Tenter de copier le fichier
        if (copy($source, $destination)) {
            echo "Le fichier a été copié avec succès.";
        } else {
            echo "Erreur lors de la copie du fichier.";
        }
    } else {
        echo "Le fichier source n'existe pas.";
    }
}

// Exemple d'utilisation
$source = 'fichier.txt';
$destination = 'nouveau_fichier.txt';

copierFichier($source, $destination);
?>
