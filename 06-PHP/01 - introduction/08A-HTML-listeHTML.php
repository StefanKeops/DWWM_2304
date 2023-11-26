<?php
function htmlList($listName, $elements) {
    // verificarea daca sunt elemente in lista
    if (empty($elements)) {
        return "<h3>$listName</h3><p>Aucun résultat</p>";
    }

    // sortarea in ordine alfabetica
    sort($elements);

    // lista HTML
    $html = "<h3>$listName</h3><ul>";
    foreach ($elements as $element) {
        $html .= "<li>$element</li>";
    }
    $html .= "</ul>";

    return $html;
}

$names1 = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
echo htmlList("Liste des personnes", $names1);

$names2 = []; // tabel gol
echo htmlList("Liste des personnes", $names2);
?>
