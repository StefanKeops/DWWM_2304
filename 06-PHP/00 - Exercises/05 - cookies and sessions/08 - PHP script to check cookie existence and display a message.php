<?php

// Vérifier si le cookie "visited" existe
if (isset($_COOKIE['visited'])) {
    // Cookie "visited" existe, afficher le message de bienvenue
    $message = "Bienvenue de nouveau ! Vous avez déjà visité ce site.";
} else {
    // Cookie "visited" n'existe pas, afficher le message par défaut
    $message = "Bienvenue sur notre site ! C'est votre première visite ici.";
    
    // Définir le cookie "visited" avec une durée de vie de 30 jours
    setcookie('visited', '1', time() + (30 * 24 * 3600), '/');
}

// Afficher le message
echo $message;

?>
