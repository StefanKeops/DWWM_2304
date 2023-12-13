<?php
// Fonction pour vérifier si un fichier existe
function verifieExistenceFichier($cheminFichier) {
    try {
        // Utilisation de la fonction file_exists pour vérifier si le fichier existe
        if (file_exists($cheminFichier)) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        // Affichage du message d'erreur en cas d'exception
        echo "Une erreur s'est produite : " . $e->getMessage();
        return false;
    }
}

// Exemple d'utilisation de la fonction
$cheminExemple = "fichier.txt";
if (verifieExistenceFichier($cheminExemple)) {
    echo "Le fichier existe.";
} else {
    echo "Le fichier n'existe pas.";
}
?>
