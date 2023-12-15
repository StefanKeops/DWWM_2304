<?php

// Chaîne JSON à décoder
$jsonString = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": {"Publisher": "Little Brown"}}';

// Décoder la chaîne JSON en tableau associatif
$data = json_decode($jsonString, true);

// Vérifier si la décoding a réussi
if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Erreur lors du décodage JSON : " . json_last_error_msg();
} else {
    // Afficher les valeurs
    echo "Titre : " . $data['Title'] . "<br>";
    echo "Auteur : " . $data['Author'] . "<br>";
    echo "Éditeur : " . $data['Detail']['Publisher'] . "<br>";
}

?>
