<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

function calculerAge($dateNaissance) {
    // Convertir la date de naissance en objet DateTime
    $dateNaissanceObj = DateTime::createFromFormat('d.m.Y', $dateNaissance);

    // Obtenir la date actuelle
    $dateActuelle = new DateTime();

    // Calculer la différence entre les deux dates
    $difference = $dateActuelle->diff($dateNaissanceObj);

    // Retourner l'âge
    return $difference->y;
}

// Exemple d'utilisation
$dateNaissance = '08.10.1979';
$age = calculerAge($dateNaissance);

echo "La personne née le $dateNaissance a actuellement $age ans.";

?>
