<?php

function calculerSommeDeControleMD5($cheminFichier) {
    // Vérifier si le fichier existe
    if (!file_exists($cheminFichier)) {
        throw new RuntimeException('Fichier introuvable : ' . $cheminFichier);
    }

    // Calculer la somme de contrôle MD5
    $sommeDeControleMD5 = md5_file($cheminFichier);

    // Vérifier si le calcul a réussi
    if ($sommeDeControleMD5 === false) {
        throw new RuntimeException('Erreur lors du calcul de la somme de contrôle MD5 pour le fichier : ' . $cheminFichier);
    }

    return $sommeDeControleMD5;
}

// Exemple d'utilisation
$cheminFichier = 'fichier.txt';

try {
    $sommeDeControleMD5 = calculerSommeDeControleMD5($cheminFichier);
    echo 'Somme de contrôle MD5 : ' . $sommeDeControleMD5;
} catch (RuntimeException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

?>
