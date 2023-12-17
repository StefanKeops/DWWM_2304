<?php

function extraireTexteEntreParentheses($chaine) {
    // Utiliser une expression régulière pour extraire le texte entre parenthèses
    if (preg_match('/\((.*?)\)/', $chaine, $matches)) {
        // $matches[1] contient le texte entre parenthèses
        return $matches[1];
    } else {
        // Retourner une chaîne vide si aucune correspondance n'est trouvée
        return '';
    }
}

// Exemple d'utilisation :
$chaineOriginale = 'The quick brown [fox].'; // Vous pouvez changer la valeur pour tester avec d'autres chaînes

$texteEntreParentheses = extraireTexteEntreParentheses($chaineOriginale);

echo "Chaîne originale : $chaineOriginale<br>";
echo "Texte entre parenthèses : $texteEntreParentheses";

?>
