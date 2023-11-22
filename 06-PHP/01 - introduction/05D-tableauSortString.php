<?php
function stringItems($array) {
    if (!empty($array)) {
        sort($array);
        return implode(', ',  $array);
    } else {
        return 'Nothing to display';
    }
}

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$resultat = stringItems($names);
echo $resultat; echo'<br>';

$names1 = [];
$resultat1 = stringItems($names1);
echo $resultat1; 
?>