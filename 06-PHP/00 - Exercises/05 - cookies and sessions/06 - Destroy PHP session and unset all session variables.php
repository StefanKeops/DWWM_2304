<?php

// Début de la session
session_start();

// Désinitialiser toutes les variables de session
$_SESSION = array();

// Détruire la session
session_destroy();

// Afficher un message de confirmation
echo "La session a été détruite et toutes les variables de session ont été désinitialisées.";

?>
