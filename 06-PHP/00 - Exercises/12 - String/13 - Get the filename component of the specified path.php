<?php

// Chemin à traiter
$chemin = "https://www.w3resource.com/index.php";

// Obtenir le nom de fichier à partir du chemin
$nomFichier = basename($chemin);

// Afficher le nom de fichier
echo "Le nom de fichier à partir du chemin '$chemin' est : $nomFichier";

?>
