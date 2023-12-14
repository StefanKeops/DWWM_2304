<?php

// Début de la session
session_start();

// Fonction pour afficher la dernière heure d'accès à la session
function displayLastAccessTime() {
    // Vérifier si la variable de session 'last_access_time' existe
    if (isset($_SESSION['last_access_time'])) {
        // Récupérer la dernière heure d'accès à la session
        $lastAccessTime = $_SESSION['last_access_time'];

        // Afficher la dernière heure d'accès
        echo "Dernière heure d'accès à la session : " . date('H:i:s', $lastAccessTime);
    } else {
        echo "C'est votre première visite sur le site.";
    }
}

// Appeler la fonction pour afficher la dernière heure d'accès à la session
displayLastAccessTime();

// Mettre à jour la variable de session 'last_access_time'
$_SESSION['last_access_time'] = time();

// Reste du script...

?>
