<?php
// Chemin vers le fichier actuel
$cheminFichierActuel = 'fichier_actuel.txt';

// Nouveau nom pour le fichier
$nouveauNom = 'nouveau_nom.txt';

// Vérifier si le fichier actuel existe
if (file_exists($cheminFichierActuel)) {
    // Renommer le fichier
    if (rename($cheminFichierActuel, $nouveauNom)) {
        echo "Le fichier a été renommé avec succès.";
    } else {
        echo "Erreur lors du renommage du fichier.";
    }
} else {
    echo "Le fichier actuel n'existe pas.";
}
?>
