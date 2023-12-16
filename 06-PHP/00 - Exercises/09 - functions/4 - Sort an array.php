<?php

function trierTableau($tableau) {
    // Utiliser la fonction sort pour trier le tableau en ordre croissant
    sort($tableau);
    return $tableau;
}

// Exemple d'utilisation :
$monTableau = array(5, 2, 8, 1, 3); // Vous pouvez changer les valeurs pour tester avec d'autres tableaux

$tableauTrie = trierTableau($monTableau);

echo "Tableau original : " . implode(', ', $monTableau) . "<br>";
echo "Tableau trié : " . implode(', ', $tableauTrie);

?>
