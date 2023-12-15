<?php

// Fonction pour changer la casse des valeurs d'un tableau
function changerCasse($tableau, $majuscules = true)
{
    $resultat = array();

    // Appliquer la casse spécifiée à chaque valeur du tableau
    foreach ($tableau as $cle => $valeur) {
        $resultat[$cle] = $majuscules ? strtoupper($valeur) : strtolower($valeur);
    }

    return $resultat;
}

// Tableau d'échantillon
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

// Changer la casse des valeurs à majuscules
$resultatMajuscules = changerCasse($Color, true);

echo "Tableau avec valeurs en majuscules :<br>";
print_r($resultatMajuscules);

// Changer la casse des valeurs à minuscules
$resultatMinuscules = changerCasse($Color, false);

echo "<br>Tableau avec valeurs en minuscules :<br>";
print_r($resultatMinuscules);

?>
