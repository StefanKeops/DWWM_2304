<?php
// Generează un șir de cuvinte aleatorii pentru a înlocui trim(fgets(STDIN))
$randomWords = array("chat", "chien", "maison", "fleur", "soleil", "arbre");
$str = implode(' ', $randomWords);

$arr = explode(' ', $str);
$arr2 = array_count_values($arr);
$word1 = array_search(max($arr2), $arr2);
$word2 = '';

foreach ($arr as $s) {
    if (mb_strlen($s, 'UTF-8') > mb_strlen($word2, 'UTF-8')) {
        $word2 = $s;
    }
}

printf("Mot 1 : %s, Mot 2 : %s\n", $word1, $word2);
