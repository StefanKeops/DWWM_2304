<?php

function estPalindrome($chaine) {
    // Supprimer les espaces et mettre la chaîne en minuscules pour la comparaison
    $chaine = strtolower(str_replace(' ', '', $chaine));

    // Utiliser la fonction strrev pour inverser la chaîne
    $chaineInverse = strrev($chaine);

    // Comparer la chaîne d'origine avec sa version inversée
    return $chaine == $chaineInverse;
}

// Exemple d'utilisation :
$chaine1 = "radar"; // Palindrome
$chaine2 = "Bonjour"; // Non-palindrome

if (estPalindrome($chaine1)) {
    echo "$chaine1 est un palindrome.";
} else {
    echo "$chaine1 n'est pas un palindrome.";
}

echo "<br>";

if (estPalindrome($chaine2)) {
    echo "$chaine2 est un palindrome.";
} else {
    echo "$chaine2 n'est pas un palindrome.";
}

?>
