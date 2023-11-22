<?php
function sortItem($array) {
    if (!empty($array)) {
        rsort($array);
        return implode(',',  $array);
    } else {
        return null;
    }
}
 
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$resultat = sortItem($names);
echo $resultat; 
?>