<?php

// Chaîne à traiter
$email = 'rayy@example.com';

// Extraire le nom d'utilisateur de l'adresse e-mail
$nomUtilisateur = strstr($email, '@', true);

// Afficher le nom d'utilisateur
echo "Le nom d'utilisateur dans l'adresse e-mail '$email' est : $nomUtilisateur";

?>
