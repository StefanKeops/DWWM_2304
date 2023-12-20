<?php

function estAnagramme($chaine1, $chaine2)
{
    // Supprimer les espaces et convertir en minuscules pour une comparaison insensible à la casse
    $chaine1 = strtolower(str_replace(' ', '', $chaine1));
    $chaine2 = strtolower(str_replace(' ', '', $chaine2));

    // Trier les caractères de chaque chaîne
    $chaine1Triee = str_split($chaine1);
    sort($chaine1Triee);
    $chaine2Triee = str_split($chaine2);
    sort($chaine2Triee);

    // Comparer les chaînes triées
    return implode('', $chaine1Triee) === implode('', $chaine2Triee);
}

// Exemple d'utilisation :
$chaine1 = 'anagram';
$chaine2 = 'nagaram';

if (estAnagramme($chaine1, $chaine2)) {
    echo "'$chaine1' est un anagramme de '$chaine2'.\n";
} else {
    echo "'$chaine1' n'est pas un anagramme de '$chaine2'.\n";
}
?>
