<?php
// Chemin vers le fichier existant
$cheminFichier = 'fichier.txt';

// Chaîne à ajouter
$chaineAAjouter = "Nouveau contenu à ajouter.";

// Vérifier si le fichier existe
if (file_exists($cheminFichier)) {
    // Ouvrir le fichier en mode ajout (append)
    $fichier = fopen($cheminFichier, 'a');

    if ($fichier) {
        // Ajouter la chaîne à la fin du fichier
        fwrite($fichier, $chaineAAjouter);

        // Fermer le fichier
        fclose($fichier);

        echo "La chaîne a été ajoutée avec succès au fichier.";
    } else {
        echo "Erreur lors de l'ouverture du fichier en mode ajout.";
    }
} else {
    echo "Le fichier n'existe pas.";
}
?>
