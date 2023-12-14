<?php

// Début de la session
session_start();

// Fonction pour régénérer l'ID de session
function regenerateSessionID() {
    // Régénérer l'ID de session
    session_regenerate_id(true);
}

// Appeler la fonction pour régénérer l'ID de session
regenerateSessionID();

// Reste du script...

?>
