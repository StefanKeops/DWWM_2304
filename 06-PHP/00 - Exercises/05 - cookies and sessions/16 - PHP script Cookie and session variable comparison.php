<?php

// Début de la session
session_start();

// Définir la variable pour le cookie et la session
$exemple_variable = "Valeur de l'exemple";

// Définir le cookie avec la même variable
setcookie('exemple_variable', $exemple_variable, time() + 3600, '/');

// Définir la variable de session avec la même variable
$_SESSION['exemple_variable'] = $exemple_variable;

// Afficher les valeurs pour comparer
echo "Valeur du cookie : " . $_COOKIE['exemple_variable'] . "<br>";
echo "Valeur de la session : " . $_SESSION['exemple_variable'] . "<br>";

?>
