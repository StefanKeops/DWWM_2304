<?php

// Date au format yyyy-mm-dd
$dateOriginale = '2012-09-12';

// Convertir la date
$dateConvertie = date('d-m-Y', strtotime($dateOriginale));

// Afficher la date convertie
echo "Date convertie : $dateConvertie\n";

?>
