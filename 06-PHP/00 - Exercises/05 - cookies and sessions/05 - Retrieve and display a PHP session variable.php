<?php

// Début de la session
session_start();

// Vérifier si la variable de session "userid" existe
if (isset($_SESSION['userid'])) {
    // Récupérer la valeur de la variable de session
    $userId = $_SESSION['userid'];

    // Afficher la valeur de la variable de session
    echo "La valeur de la variable de session 'userid' est : $userId";
} else {
    echo "La variable de session 'userid' n'est pas définie.";
}

?>
