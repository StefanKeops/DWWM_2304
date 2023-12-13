<?php
// Chemin vers le fichier à supprimer
$cheminFichierASupprimer = 'fichier_a_supprimer.txt';

// Vérifier si le fichier existe
if (file_exists($cheminFichierASupprimer)) {
    // Tenter de supprimer le fichier
    if (unlink($cheminFichierASupprimer)) {
        echo "Le fichier a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du fichier.";
    }
} else {
    echo "Le fichier n'existe pas.";
}
?>
