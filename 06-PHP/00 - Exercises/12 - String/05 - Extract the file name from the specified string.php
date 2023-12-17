<?php

// Chaîne à traiter
$cheminFichier = 'www.example.com/public_html/index.php';

// Extraire le nom du fichier
$nomFichier = basename($cheminFichier);

// Afficher le nom du fichier
echo "Le nom du fichier dans le chemin '$cheminFichier' est : $nomFichier";

?>
