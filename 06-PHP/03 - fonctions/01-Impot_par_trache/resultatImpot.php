<?php

include ('functions.php');

// recuperarea datelor din formular
$nom = $_POST['nom'];
$revenu = $_POST['revenu'];

// functia de calcul
$impot = CalculImpot($revenu);

// afisarea rezultatului
echo "$nom, votre impôt sur le revenus est de $impot €.";
?>