<?php

// Tableau d'échantillon
$donnees = array(
    array('page_id' => 2, 'username' => 'Alice'),
    array('page_id' => 1, 'username' => 'Bob'),
    array('page_id' => 1, 'username' => 'Charlie'),
    array('page_id' => 3, 'username' => 'David'),
    array('page_id' => 2, 'username' => 'Eva')
);

// Fonction de comparaison personnalisée
function comparaisonPersonnalisee($a, $b)
{
    // Comparer d'abord par page_id, puis par username
    if ($a['page_id'] == $b['page_id']) {
        return strcmp($a['username'], $b['username']);
    }

    return ($a['page_id'] < $b['page_id']) ? -1 : 1;
}

// Utiliser usort pour trier le tableau avec la fonction de comparaison personnalisée
usort($donnees, 'comparaisonPersonnalisee');

// Afficher le tableau trié
echo "Tableau trié :\n";
foreach ($donnees as $element) {
    echo "page_id: " . $element['page_id'] . ", username: " . $element['username'] . "\n";
}

?>
