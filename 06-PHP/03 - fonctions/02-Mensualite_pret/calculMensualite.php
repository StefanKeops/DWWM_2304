<?php

include ('fonctions.php');

// recuperarea datelor din formular
$capital = $_POST['capital'];
$taux = $_POST['taux'];
$annees = $_POST['annees'];

// functia de calcul
$mensualite = calculerMensualite($capital, $taux, $annees);

// afisarea rezultatului
echo "La mensualité constante du prêt est : " . round($mensualite, 2) . " €";
?>