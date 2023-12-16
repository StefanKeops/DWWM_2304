<?php

// Tableau d'échantillon avec des adresses e-mail
$tableauEmails = array("john.doe@example.com", "jane.smith@example.com", "john.doe@example.com", "alice.jones@example.com");

// Utiliser la fonction array_count_values pour obtenir le nombre d'occurrences de chaque adresse e-mail
$occurrences = array_count_values($tableauEmails);

// Identifier les adresses e-mail qui ne sont pas uniques
$adressesNonUniques = array_keys(array_filter($occurrences, function ($occurrence) {
    return $occurrence > 1;
}));

// Afficher les adresses e-mail non uniques
echo "Adresses e-mail non uniques :\n";
print_r($adressesNonUniques);

?>
