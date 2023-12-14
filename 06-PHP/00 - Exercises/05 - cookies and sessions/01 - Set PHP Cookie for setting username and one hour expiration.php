<?php

// Définir le nom d'utilisateur et la durée de vie du cookie
$nomUtilisateur = "Gulnara Serik";
$dureeVie = time() + 3600; // Une heure à partir du temps actuel

// Définir le cookie
setcookie("username", $nomUtilisateur, $dureeVie, "/");

// Afficher un message de confirmation
echo "Le cookie 'username' a été défini avec succès avec la valeur '$nomUtilisateur' et une durée de vie d'une heure.";

?>
