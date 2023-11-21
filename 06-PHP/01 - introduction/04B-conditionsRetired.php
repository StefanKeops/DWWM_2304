<?php
function getRetired($age) {
    if ($age > 60) {
        $difference = $age - 60;
        return 'Vous êtes à la retraite depuis ' . $difference . ' ans';
    }
    elseif ($age >= 0 && $age < 60 ) {
        $difference1 = 60 - $age;
        return 'Il vous reste ' . $difference1 . ' ans avant la retraite';
    }
    elseif ($age == 60) {
        return 'Vous êtes à la retraite cette année';
    }
    else {
        return 'Vous n’êtes pas encore né';
    }
}
 
$resultat1 = getRetired(12);
$resultat2 = getRetired(60);
$resultat3 = getRetired(-2);
$resultat4 = getRetired(72);
 
echo $resultat1; echo'<br>';
echo $resultat2; echo'<br>';
echo $resultat3; echo'<br>';
echo $resultat4; echo'<br>';
?>