<?php

// URL d'origine
$urlOriginale = 'http://www.example.com/5478631';

// Obtenir les caractères après le dernier '/'
$caracteresApresDernierSlash = substr(strrchr($urlOriginale, '/'), 1);

// Afficher les caractères après le dernier '/'
echo "Les caractères après le dernier '/' dans l'URL sont : $caracteresApresDernierSlash";

?>
