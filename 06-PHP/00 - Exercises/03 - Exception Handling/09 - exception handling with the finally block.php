<?php
try {
    // Code susceptible de générer une exception
    $number = 0;

    // Vérifions si $number est égal à zéro et lançons une exception dans ce cas
    if ($number === 0) {
        throw new Exception("Le nombre ne peut pas être zéro.");
    }

    // Calculons le résultat de la division et l'affichons
    $result = 200 / $number;
    echo "Résultat : " . $result;

    // Code qui sera toujours exécuté, qu'une exception survienne ou non
    echo "Ce code sera toujours exécuté.";
} catch (Exception $e) {
    // Capturons l'exception et affichons un message d'erreur
    echo "Une erreur s'est produite : " . $e->getMessage();
}
?>
