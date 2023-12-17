<?php

// Set the timezone to UTC (you can replace 'UTC' with your preferred timezone)
date_default_timezone_set('UTC');

function compteAReboursAnniversaire($dateAnniversaire) {
    // Convertir la date d'anniversaire en objet DateTime
    $dateAnniversaireObj = new DateTime($dateAnniversaire);

    // Obtenir la date actuelle
    $dateActuelle = new DateTime();

    // Calculer la différence entre les deux dates
    $difference = $dateActuelle->diff($dateAnniversaireObj);

    // Afficher le nombre de jours restants
    echo "Il reste {$difference->days} jours jusqu'à l'anniversaire le $dateAnniversaire.";
}

// Date d'anniversaire (8 octobre 2024)
$dateAnniversaire = '2024-10-08';

// Appeler la fonction avec la date d'anniversaire spécifiée
compteAReboursAnniversaire($dateAnniversaire);

?>
