<?php

// Fonction pour générer une plage de lettres avec une longueur arbitraire
function genererPlageLettres($longueur)
{
    // Vérifier que la longueur est positive
    if ($longueur <= 0) {
        return array(); // Retourner un tableau vide en cas de longueur invalide
    }

    // Utiliser la fonction range pour générer une plage de lettres
    $lettres = range('A', 'Z');

    // Répéter la séquence de lettres pour atteindre la longueur spécifiée
    $plageLettres = array();
    while (count($plageLettres) < $longueur) {
        $plageLettres = array_merge($plageLettres, $lettres);
    }

    // Extraire la longueur nécessaire de la plage générée
    $plageLettres = array_slice($plageLettres, 0, $longueur);

    return $plageLettres;
}

// Longueur de la plage de lettres d'échantillon
$longueurPlage = 15;

// Appeler la fonction pour générer une plage de lettres avec la longueur spécifiée
$plageLettresGeneree = genererPlageLettres($longueurPlage);

// Afficher la plage de lettres générée
echo "Plage de lettres générée avec une longueur de $longueurPlage :\n";
print_r($plageLettresGeneree);

?>
