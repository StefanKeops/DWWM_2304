<?php

function lireFichierJson($fichierJson) {
    // Lire le contenu du fichier JSON
    $contenuJson = file_get_contents($fichierJson);

    // Décoder le contenu JSON en tableau associatif
    $donnees = json_decode($contenuJson, true);

    // Vérifier les erreurs de décodage JSON
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new RuntimeException('Erreur de décodage JSON : ' . json_last_error_msg());
    }

    return $donnees;
}

// Exemple d'utilisation
$fichierJson = 'people.json';

try {
    $donneesDecodees = lireFichierJson($fichierJson);

    // Afficher les données décodées
    print_r($donneesDecodees);
} catch (RuntimeException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

?>
