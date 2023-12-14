<?php

// Début de la session
session_start();

// Définir le temps d'inactivité avant l'expiration de la session (30 minutes)
$timeout = 30 * 60;

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    // Si l'inactivité dépasse le délai, détruire la session
    session_unset();
    session_destroy();
    session_start(); // Redémarrer une nouvelle session

    // Vous pouvez également régénérer l'ID de session pour des raisons de sécurité
    session_regenerate_id(true);

    echo "Session expirée en raison d'inactivité. Vous êtes maintenant déconnecté.";
} else {
    // Mettre à jour le temps de dernière activité
    $_SESSION['last_activity'] = time();
    
    // Afficher un message ou effectuer d'autres actions selon les besoins
    echo "Vous êtes toujours connecté. Dernière activité : " . date('H:i:s', $_SESSION['last_activity']);
}

?>
