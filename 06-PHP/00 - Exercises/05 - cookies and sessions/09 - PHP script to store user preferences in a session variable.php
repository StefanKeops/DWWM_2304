<?php

// Début de la session
session_start();

// Tableau de préférences utilisateur
$preferences = [
    'langue' => 'francais',
    'couleur' => 'bleu',
    'theme' => 'clair'
];

// Stocker le tableau de préférences dans la variable de session
$_SESSION['user_preferences'] = $preferences;

// Afficher un message de confirmation
echo "Les préférences utilisateur ont été stockées dans la variable de session.";

?>
