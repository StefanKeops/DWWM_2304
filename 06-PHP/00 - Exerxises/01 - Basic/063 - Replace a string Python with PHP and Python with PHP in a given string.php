<?php
// Generează un șir de caractere aleatorii pentru a înlocui trim(fgets(STDIN))
$randomString = "Ceci est une phrase aléatoire en français avec Python et PHP.";
$str = $randomString;

// Înlocuiește cuvintele specificate în șirul generat
$str = str_replace(array('Python', 'PHP'), array('@ython', 'Python'), $str);

// Înlocuiește marcajul temporar cu cuvântul final
echo str_replace('@ython', 'PHP', $str), PHP_EOL;
