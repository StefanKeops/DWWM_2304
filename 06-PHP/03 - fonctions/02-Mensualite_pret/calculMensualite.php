<?php

include ('fonctions.php');

// recuperarea datelor din formular
$capital = $_POST['capital'];
$taux = $_POST['taux'];
$annees = $_POST['annees'];

// functia de calcul
$mensualite = calculerMensualite($capital, $taux, $annees);
$tableauAmortissement = calculerAmortissement($capital, $taux, $annees);

// afisarea rezultatului
echo "La mensualité constante du prêt est : " . round($mensualite, 2) . " €"; echo '<br>';
echo '<table border="1">';
echo '<tr><th>Mois</th><th>Intérêts</th><th>Partie amortissement</th><th>Capital restant dû</th></tr>';
foreach ($tableauAmortissement as $ligne) {
    echo '<tr>';
    echo '<td>' . $ligne['mois'] . '</td>';
    echo '<td>' . round($ligne['interets'], 2) . '</td>';
    echo '<td>' . round($ligne['partAmortissement'], 2) . '</td>';
    echo '<td>' . round($ligne['capitalRestant'], 2) . '</td>';
    echo '</tr>';
}
echo '</table>'
?>