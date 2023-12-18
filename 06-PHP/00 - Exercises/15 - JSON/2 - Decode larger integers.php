<?php

$jsonString = '{"number": "123456789012345678901234567890"}';

// Décoder la chaîne JSON
$data = json_decode($jsonString, true);

if ($data !== null) {
    // Utiliser bcmath pour manipuler l'entier arbitrairement grand
    $largeInteger = $data['number'];
    $decodedNumber = bcmul($largeInteger, '1'); // Convertir en chaîne pour éviter la conversion automatique en virgule flottante

    // Afficher le résultat
    echo "Nombre décodé : " . $decodedNumber . "\n";
} else {
    // Gérer les erreurs de décodage JSON
    echo "Erreur lors du décodage JSON.\n";
}

?>
