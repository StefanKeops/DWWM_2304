<?php
function ecrireDansFichier($cheminFichier, $contenu) {
    // Ouvrir le fichier en mode écriture
    $fichier = fopen($cheminFichier, 'w');

    if ($fichier) {
        // Écrire le contenu dans le fichier
        fwrite($fichier, $contenu);

        // Fermer le fichier
        fclose($fichier);

        echo "Le contenu a été écrit dans le fichier avec succès.";
    } else {
        echo "Erreur lors de l'ouverture du fichier.";
    }
}

// Exemple d'utilisation
$cheminFichier = 'fichier.txt';
$contenu = 'Bonjour, monde!';

ecrireDansFichier($cheminFichier, $contenu);
?>
