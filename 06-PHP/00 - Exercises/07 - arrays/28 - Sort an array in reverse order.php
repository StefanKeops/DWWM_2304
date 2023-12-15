<?php

// Tableau d'échantillon
$donnees = array(8, 4, 10, 6, 2, 7);

// Utiliser la fonction arsort pour trier le tableau en ordre inverse (du plus élevé au plus bas)
arsort($donnees);

// Afficher le tableau trié en ordre inverse
echo "Tableau trié en ordre inverse :\n";
foreach ($donnees as $valeur) {
    echo $valeur . "\n";
}

?>
