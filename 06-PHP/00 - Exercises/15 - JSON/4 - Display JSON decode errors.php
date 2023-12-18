<?php

function displayJsonDecodeErrors($jsonString) {
    // Décoder la chaîne JSON
    $data = json_decode($jsonString);

    // Vérifier s'il y a une erreur de décodage
    $jsonError = json_last_error();
    
    if ($jsonError !== JSON_ERROR_NONE) {
        // Afficher l'erreur de décodage
        echo "Erreur de décodage JSON : " . json_last_error_msg() . "\n";
    } else {
        // Afficher les données décodées
        echo "Données décodées avec succès :\n";
        print_r($data);
    }
}

// Exemple d'utilisation
$jsonStringWithError = '{"name": "John", "age": "thirty"}';
$jsonStringWithoutError = '{"name": "John", "age": 30}';

echo "Avec erreur :\n";
displayJsonDecodeErrors($jsonStringWithError);

echo "\nSans erreur :\n";
displayJsonDecodeErrors($jsonStringWithoutError);

?>
