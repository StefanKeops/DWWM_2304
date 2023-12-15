<?php

// Fonction pour trier des lettres représentant des entités
function trierLettresEntites($lettres)
{
    // Utiliser la fonction natcasesort pour trier les lettres de manière insensible à la casse
    natcasesort($lettres);

    return $lettres;
}

// Tableau d'échantillon de lettres représentant des entités
$lettresEntites = array("B", "a", "C", "D", "e");

// Appeler la fonction pour trier les lettres représentant des entités
$lettresTrie = trierLettresEntites($lettresEntites);

// Afficher le tableau trié
echo "Lettres représentant des entités triées :\n";
foreach ($lettresTrie as $lettre) {
    echo $lettre . "\n";
}

?>
