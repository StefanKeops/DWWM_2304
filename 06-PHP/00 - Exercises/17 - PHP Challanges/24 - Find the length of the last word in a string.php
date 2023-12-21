<?php

function longueurDernierMot($chaine)
{
    // Supprimer les espaces à la fin de la chaîne
    $chaine = rtrim($chaine);

    // Trouver la dernière occurrence d'un espace dans la chaîne
    $dernierEspace = strrpos($chaine, ' ');

    if ($dernierEspace === false) {
        // Aucun espace trouvé, la chaîne entière est le dernier mot
        return strlen($chaine);
    } else {
        // Extraire le dernier mot à partir de la dernière occurrence d'un espace
        $dernierMot = substr($chaine, $dernierEspace + 1);
        return strlen($dernierMot);
    }
}

// Exemple d'utilisation :
$chaineEntree = "Ceci est un exemple de chaîne.";
$longueurDernierMot = longueurDernierMot($chaineEntree);

echo "Chaîne d'entrée : \"$chaineEntree\"\n"; echo "<br>";
echo "Longueur du dernier mot : $longueurDernierMot\n"; echo "<br>";
?>
