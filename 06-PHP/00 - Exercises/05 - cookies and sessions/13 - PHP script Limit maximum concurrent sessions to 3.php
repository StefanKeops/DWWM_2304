<?php

// Début de la session
session_start();

// Fonction pour limiter le nombre de sessions simultanées pour un utilisateur
function limitConcurrentSessions($maxSessions = 3) {
    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION['user_id'])) {
        // Identifier l'utilisateur
        $userId = $_SESSION['user_id'];

        // Récupérer les informations de session pour l'utilisateur
        $userSessions = isset($_SESSION['active_sessions'][$userId]) ? $_SESSION['active_sessions'][$userId] : [];

        // Limiter le nombre de sessions simultanées
        if (count($userSessions) >= $maxSessions) {
            // Détruire la session actuelle
            session_unset();
            session_destroy();
            echo "Limite maximale de sessions simultanées atteinte. Vous êtes déconnecté.";
            exit();
        }

        // Ajouter la session actuelle à la liste des sessions pour cet utilisateur
        $userSessions[] = session_id();
        $_SESSION['active_sessions'][$userId] = $userSessions;
    }
}

// Appeler la fonction pour limiter le nombre de sessions simultanées
limitConcurrentSessions();

// Reste du script...

?>
