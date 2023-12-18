<?php
function shellSort(&$arr)
{
    $n = count($arr);
    
    // Initialiser l'intervalle (gap) le plus grand
    $gap = floor($n / 2);

    // Réduire l'intervalle jusqu'à ce qu'il devienne 1
    while ($gap > 0) {
        // Effectuer le tri par insertion avec l'intervalle actuel (gap)
        for ($i = $gap; $i < $n; $i++) {
            $temp = $arr[$i];
            
            // Déplacer les éléments du sous-tableau trié vers la droite
            $j = $i;
            while ($j >= $gap && $arr[$j - $gap] > $temp) {
                $arr[$j] = $arr[$j - $gap];
                $j -= $gap;
            }
            
            // Insérer l'élément temporaire à sa position correcte
            $arr[$j] = $temp;
        }

        // Réduire l'intervalle (gap) pour la prochaine itération
        $gap = floor($gap / 2);
    }
}

// Exemple d'utilisation
$myArray = [62, 17, 25, 32, 56, 9, 8, 13, 41, 22, 54, 5];
echo "Avant le tri : " . implode(", ", $myArray) . "\n";
echo "<br>";

shellSort($myArray);

echo "Après le tri : " . implode(", ", $myArray) . "\n";
?>
