<?php
// Chemin vers le fichier à vérifier
$cheminFichier = 'fichier.txt';

// Vérifier si le fichier existe
if (file_exists($cheminFichier)) {
    // Vérifier si le fichier est modifiable
    if (is_writable($cheminFichier)) {
        echo "Le fichier est modifiable.";
    } else {
        echo "Le fichier n'est pas modifiable.";
    }
} else {
    echo "Le fichier n'existe pas.";
}
?>
