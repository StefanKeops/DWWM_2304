<?php

// Chaînes à comparer
$chaine1 = 'football';
$chaine2 = 'footboll';

// Trouver le premier caractère différent
$longueurMin = min(strlen($chaine1), strlen($chaine2));

for ($i = 0; $i < $longueurMin; $i++) {
    if ($chaine1[$i] !== $chaine2[$i]) {
        echo "Le premier caractère différent se trouve à la position $i : '$chaine1[$i]' dans la première chaîne et '$chaine2[$i]' dans la deuxième chaîne.";
        break;
    }
}

?>
