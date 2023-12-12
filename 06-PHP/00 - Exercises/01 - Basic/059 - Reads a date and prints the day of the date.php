<?php
$days = explode(',', '0,31,60,91,121,152,182,213,244,274,305,335');
$months = explode(',', 'Janvier,Février,Mars,Avril,Mai,Juin,Juillet,Août,Septembre,Octobre,Novembre,Décembre');
$format = explode(',', 'Mercredi,Jeudi,Vendredi,Samedi,Dimanche,Lundi,Mardi');

while (true) {
    $m = rand(1, 12); // Generează un număr aleatoriu între 1 și 12 pentru luna (m)
    $d = rand(1, 31); // Generează un număr aleatoriu între 1 și 31 pentru ziua (d)

    if ($m === 2 && in_array($d, [29, 30, 31])) {
        // Dacă luna este februarie și ziua este 29, 30 sau 31, oprește bucla
        break;
    }

    $n = $days[$m - 1] + $d;
    $today = $format[$n % 7];

    echo "Le jour est : " . $today, PHP_EOL;
    echo "Le mois est : " . $months[$m - 1] . " et le jour est : " . $d, PHP_EOL;
    echo "<br>";

    if ($m === 0) {
        break;
    }
}
