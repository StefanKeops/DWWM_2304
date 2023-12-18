<?php

$jsonString = '{"nom": "John", "age": 30, "ville": "Paris"}';

// Décoder la chaîne JSON
$data = json_decode($jsonString, true); // Le deuxième argument true indique de retourner un tableau associatif

if ($data !== null) {
    // Afficher les données décodées
    echo "Nom : " . $data['nom'] . "\n";
    echo "Âge : " . $data['age'] . "\n";
    echo "Ville : " . $data['ville'] . "\n";
} else {
    // Gérer les erreurs de décodage JSON
    echo "Erreur lors du décodage JSON.\n";
}

?>
