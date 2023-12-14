<?php

// Début de la session
session_start();

// Fonction pour compter les sessions actives
function countActiveSessions() {
    $sessionCount = 0;

    // Récupérer le chemin du répertoire des sessions
    $sessionPath = session_save_path();

    // Vérifier si le répertoire des sessions existe
    if ($sessionPath) {
        // Scanner le répertoire des sessions
        $files = scandir($sessionPath);

        // Parcourir les fichiers du répertoire
        foreach ($files as $file) {
            // Ignorer les fichiers spéciaux
            if ($file != '.' && $file != '..') {
                // Vérifier l'état de la session
                if (session_status() === PHP_SESSION_ACTIVE) {
                    $sessionCount++;
                }
            }
        }
    }

    return $sessionCount;
}

// Appeler la fonction pour compter les sessions actives
$activeSessions = countActiveSessions();

// Afficher le nombre de sessions actives
echo "Nombre de sessions actives sur le serveur : $activeSessions";

?>
