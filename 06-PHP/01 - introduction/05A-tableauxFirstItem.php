<?php
function firstItem($array) {
    if (!empty($array)) {
        return $array[0];
    } else {
        return null;
    }
}
 
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$resultat = firstItem($names);
echo $resultat; 
?>