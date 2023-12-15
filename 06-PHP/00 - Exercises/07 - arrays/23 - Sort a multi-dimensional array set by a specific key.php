<?php

// Tableau multidimensionnel d'échantillon
$donnees = array(
    array('id' => 2, 'nom' => 'Alice', 'age' => 25),
    array('id' => 1, 'nom' => 'Bob', 'age' => 30),
    array('id' => 3, 'nom' => 'Charlie', 'age' => 22),
    array('id' => 4, 'nom' => 'David', 'age' => 28),
);

// Fonction de comparaison personnalisée
function comparaisonParCle($a, $b, $cle)
{
    return strcmp($a[$cle], $b[$cle]);
}

// Fonction pour trier le tableau multidimensionnel selon une clé spécifique
function trierParCle($tableau, $cle)
{
    // Utiliser usort avec la fonction de comparaison personnalisée
    usort($tableau, function ($a, $b) use ($cle) {
        return comparaisonParCle($a, $b, $cle);
    });

    return $tableau;
}

// Clé par laquelle trier le tableau (par exemple, 'nom' ou 'age')
$cleTri = 'nom';

// Appeler la fonction pour trier le tableau par la clé spécifiée
$tableauTrie = trierParCle($donnees, $cleTri);

// Afficher le tableau trié
echo "Tableau trié par la clé '$cleTri' :\n";
foreach ($tableauTrie as $element) {
    echo "id: " . $element['id'] . ", nom: " . $element['nom'] . ", age: " . $element['age'] . "\n";
}

?>
