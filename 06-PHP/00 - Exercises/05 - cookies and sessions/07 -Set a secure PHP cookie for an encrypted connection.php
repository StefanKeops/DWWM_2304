<?php

// Vérifier si la connexion est sécurisée (HTTPS)
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    // Définir le cookie avec le drapeau 'secure'
    setcookie('cookie_securise', 'valeur_cookie', time() + 3600, '/', null, true, true);

    echo "Cookie sécurisé défini avec succès.";
} else {
    echo "Ce script doit être accédé via HTTPS pour définir un cookie sécurisé.";
}

?>
