<?php

// Récupérer la date actuelle
$dateActuelle = date('Y/m/d');

// Format 1 : 2013/09/01
echo "Format 1 : $dateActuelle<br>";

// Format 2 : 13.09.01
echo "Format 2 : " . date('y.m.d') . "<br>";

// Format 3 : 01-09-13
echo "Format 3 : " . date('d-m-y');

?>
