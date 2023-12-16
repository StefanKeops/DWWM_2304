<?php

// Fonction pour créer un tableau multidimensionnel unique pour un index de clé unique donné
function tableauMultidimensionnelUnique($tableau, $cleIndex)
{
    $tableauUnique = array();
    $indexesDejaVus = array();

    foreach ($tableau as $element) {
        $cle = $element[$cleIndex];

        // Vérifier si la clé a déjà été vue
        if (!in_array($cle, $indexesDejaVus)) {
            $indexesDejaVus[] = $cle;

            // Ajouter l'élément au tableau unique
            $tableauUnique[] = $element;
        }
    }

    return $tableauUnique;
}

// Tableau d'échantillon avec des clés index uniques
$tableau = array(
    array("id" => 1, "nom" => "Pomme"),
    array("id" => 2, "nom" => "Banane"),
    array("id" => 1, "nom" => "Orange"),
    array("id" => 3, "nom" => "Kiwi"),
    array("id" => 2, "nom" => "Fraise")
);

// Appeler la fonction pour créer le tableau multidimensionnel unique pour la clé "id"
$tableauUnique = tableauMultidimensionnelUnique($tableau, "id");

// Afficher le tableau unique résultant
echo "Tableau multidimensionnel unique :\n";
print_r($tableauUnique);

?>
