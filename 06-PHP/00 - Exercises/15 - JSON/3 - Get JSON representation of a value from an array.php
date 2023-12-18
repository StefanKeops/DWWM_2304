<?php

// Tableau de données
$data = array(
    'nom' => 'John',
    'age' => 30,
    'ville' => 'Paris'
);

// Encodage en JSON
$jsonString = json_encode($data, JSON_PRETTY_PRINT);

// Afficher la représentation JSON
if ($jsonString !== false) {
    echo "Représentation JSON :\n";
    echo $jsonString . "\n";
} else {
    // Gérer les erreurs d'encodage JSON
    echo "Erreur lors de l'encodage JSON.\n";
}

?>
