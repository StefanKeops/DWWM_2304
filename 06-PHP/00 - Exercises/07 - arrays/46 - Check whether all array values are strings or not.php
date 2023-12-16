<?php

// Fonction pour vérifier si toutes les valeurs d'un tableau sont des chaînes de caractères
function toutesLesValeursSontDesChaines($tableau)
{
    foreach ($tableau as $valeur) {
        if (!is_string($valeur)) {
            return false;
        }
    }

    return true;
}

// Tableaux d'échantillon
$tableau1 = array("a", "b", "c");
$tableau2 = array("apple", "banana", 123);

// Appeler la fonction pour vérifier si toutes les valeurs du tableau sont des chaînes
$resultat1 = toutesLesValeursSontDesChaines($tableau1);
$resultat2 = toutesLesValeursSontDesChaines($tableau2);

// Afficher les résultats
echo "Résultat pour \$tableau1 : " . ($resultat1 ? "Toutes les valeurs sont des chaînes" : "Il y a des valeurs qui ne sont pas des chaînes") . "\n";
echo "Résultat pour \$tableau2 : " . ($resultat2 ? "Toutes les valeurs sont des chaînes" : "Il y a des valeurs qui ne sont pas des chaînes") . "\n";

?>
