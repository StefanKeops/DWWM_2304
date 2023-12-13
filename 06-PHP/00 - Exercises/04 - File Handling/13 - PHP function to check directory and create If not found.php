<?php
function verifierEtCreerRepertoire($cheminRepertoire) {
    // Vérifier si le répertoire existe
    if (!is_dir($cheminRepertoire)) {
        // Tenter de créer le répertoire
        if (mkdir($cheminRepertoire, 0777, true)) {
            echo "Le répertoire a été créé avec succès.";
        } else {
            echo "Erreur lors de la création du répertoire.";
        }
    } else {
        echo "Le répertoire existe déjà.";
    }
}

// Exemple d'utilisation
$cheminRepertoire = 'repertoire';
verifierEtCreerRepertoire($cheminRepertoire);
?>
