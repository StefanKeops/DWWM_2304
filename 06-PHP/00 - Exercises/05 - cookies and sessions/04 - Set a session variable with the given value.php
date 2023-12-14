<?php

// Début de la session
session_start();

// Définir la variable de session "userid"
$_SESSION['userid'] = 10020;

// Afficher un message de confirmation
echo "La variable de session 'userid' a été définie avec succès avec la valeur 10020.";

?>
