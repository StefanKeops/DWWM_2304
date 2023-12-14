<?php

// Début de la session
session_start();

// Vérifier si la variable de session 'user_preferences' existe
if (isset($_SESSION['user_preferences'])) {
    // Récupérer le tableau de préférences depuis la variable de session
    $preferences = $_SESSION['user_preferences'];

    // Afficher les préférences utilisateur
    echo "Préférences utilisateur : <br>";
    echo "Langue : " . $preferences['langue'] . "<br>";
    echo "Couleur : " . $preferences['couleur'] . "<br>";
    echo "Thème : " . $preferences['theme'] . "<br>";
} else {
    echo "Aucune préférence utilisateur n'a été définie.";
}

?>
