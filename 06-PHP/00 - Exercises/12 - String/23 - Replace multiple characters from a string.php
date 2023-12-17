<?php

// Chaîne d'origine
$chaineOriginale = '\"\\1+2/3*2:2-3/4*3';

// Caractères à remplacer
$caracteresAReplacer = array('\"', '\\', ':', '+', '-', '*', '/', '\1');

// Remplacer les caractères
$nouvelleChaine = str_replace($caracteresAReplacer, '', $chaineOriginale);

// Afficher la nouvelle chaîne
echo "La chaîne après remplacement des caractères : $nouvelleChaine";

?>
