<?php

function comparerTableauxMultidimensionnels($array1, $array2) {
    $diff = array();

    foreach ($array1 as $key => $value) {
        if (is_array($value)) {
            if (!isset($array2[$key]) || !is_array($array2[$key])) {
                $diff[$key] = $value;
            } else {
                $recursiveDiff = comparerTableauxMultidimensionnels($value, $array2[$key]);
                if (!empty($recursiveDiff)) {
                    $diff[$key] = $recursiveDiff;
                }
            }
        } else {
            if (!array_key_exists($key, $array2) || $array2[$key] !== $value) {
                $diff[$key] = $value;
            }
        }
    }

    foreach ($array2 as $key => $value) {
        if (is_array($value) && (!isset($array1[$key]) || !is_array($array1[$key]))) {
            $diff[$key] = $value;
        } elseif (!array_key_exists($key, $array1)) {
            $diff[$key] = $value;
        }
    }

    return $diff;
}

// Exemple d'utilisation
$array1 = array(
    'fruit' => 'apple',
    'numbers' => array(1, 2, 3),
    'colors' => array('red', 'green', 'blue')
);

$array2 = array(
    'fruit' => 'orange',
    'numbers' => array(1, 2, 4),
    'shapes' => array('circle', 'square')
);

$resultatDifference = comparerTableauxMultidimensionnels($array1, $array2);

// Affiche la différence
print_r($resultatDifference);

?>
