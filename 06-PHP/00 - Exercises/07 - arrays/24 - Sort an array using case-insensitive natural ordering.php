<?php

// Tableau d'échantillon
$donnees = array("apple", "Banana", "Orange", "grape", "Peach");

// Utiliser la fonction natcasesort pour trier le tableau de manière insensible à la casse
natcasesort($donnees);

// Afficher le tableau trié
echo "Tableau trié de manière insensible à la casse :\n";
foreach ($donnees as $element) {
    echo $element . "\n";
}

?>
