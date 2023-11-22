<?php
function lastItem($array) {
    if (!empty($array)) {
        $dernier = end($array);
        return $dernier;
    } else {
        return null;
    }
}
 
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$resultat = lastItem($names);
echo $resultat; 
?>