<?php
// Chemin vers le fichier à vérifier
$cheminFichier = 'fichier.txt';

// Obtenir l'extension du fichier
$extension = pathinfo($cheminFichier, PATHINFO_EXTENSION);

// Vérifier si le fichier existe
if (file_exists($cheminFichier)) {
    // Vérifier l'extension du fichier
    switch ($extension) {
        case 'txt':
            echo "Le fichier est un fichier texte.";
            break;
        case 'pdf':
            echo "Le fichier est un fichier PDF.";
            break;
        case 'jpg':
        case 'jpeg':
        case 'png':
            echo "Le fichier est une image.";
            break;
        default:
            echo "Le type de fichier n'est pas pris en charge.";
            break;
    }
} else {
    echo "Le fichier n'existe pas.";
}
?>
