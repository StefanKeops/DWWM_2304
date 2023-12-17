<?php

// Définir le fuseau horaire à utiliser
$zoneHoraire = 'Europe/Paris'; // Vous pouvez changer cette valeur selon vos besoins

// Créer un objet DateTime avec le fuseau horaire spécifié
$dateActuelle = new DateTime('now', new DateTimeZone($zoneHoraire));

// Afficher l'heure dans le fuseau horaire spécifié
echo "L'heure actuelle dans le fuseau horaire $zoneHoraire est : " . $dateActuelle->format('Y-m-d H:i:s');

?>
