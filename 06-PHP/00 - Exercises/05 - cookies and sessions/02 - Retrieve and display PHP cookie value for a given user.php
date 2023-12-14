<?php

// Vérifier si le cookie "username" existe
if (isset($_COOKIE['username'])) {
    // Récupérer la valeur du cookie
    $nomUtilisateur = $_COOKIE['username'];

    // Afficher la valeur du cookie
    echo "La valeur du cookie 'username' est : $nomUtilisateur";
} else {
    echo "Le cookie 'username' n'est pas défini.";
}

?>
