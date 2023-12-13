<?php
function rechercherMotDansFichier($cheminFichier, $motRecherche) {
    // Vérifier si le fichier existe
    if (file_exists($cheminFichier)) {
        // Ouvrir le fichier en lecture
        $fichier = fopen($cheminFichier, 'r');

        // Initialiser le numéro de ligne
        $numeroLigne = 1;

        // Parcourir chaque ligne du fichier
        while (($ligne = fgets($fichier)) !== false) {
            // Vérifier si le mot est présent dans la ligne
            if (strpos($ligne, $motRecherche) !== false) {
                echo "Mot trouvé à la ligne $numeroLigne : $ligne";
            }

            // Augmenter le numéro de ligne
            $numeroLigne++;
        }

        // Fermer le fichier
        fclose($fichier);
    } else {
        echo "Le fichier n'existe pas.";
    }
}

// Exemple d'utilisation
$cheminFichier = 'fichier.txt';
$motRecherche = 'recherche';
rechercherMotDansFichier($cheminFichier, $motRecherche);
?>
