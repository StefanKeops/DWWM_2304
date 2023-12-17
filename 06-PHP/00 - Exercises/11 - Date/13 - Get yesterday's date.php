<?php

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Obtenez la date actuelle
$dateActuelle = new DateTime();

// Décrémentez la date d'un jour pour obtenir la date d'hier
$dateHier = $dateActuelle->sub(new DateInterval('P1D'));

// Affichez la date d'hier
echo "La date d'hier était : " . $dateHier->format('Y-m-d');

?>
