<?php
function getTimeLeft($date) {
    $dateDuJour = new DateTime('now');
    $date = DateTime::createFromFormat('Y-m-d', $date);
 
    if (!$date || $dateDuJour > $date) {
        $interval = date_diff($dateDuJour, $date);
 
        $years = $interval->format('%y');
        $months = $interval->format('%m');
        $days = $interval->format('%d');
 
        $output = '';
 
        if ($years > 0) {
            $output .= "Dans $years an" . ($years > 1 ? 's' : '');
        }
 
        if ($months > 0) {
            $output .= ($output ? ' et ' : '') . "Dans $months mois";
        }
 
        if ($days > 0) {
            $output .= ($output ? ' et ' : '') . "Dans $days jour" . ($days > 1 ? 's' : '');
        }
 
        return $output ? $output : 'Aujourd\'hui';
    } elseif ($date < $dateDuJour) {
        return 'Évènement passé';
    } else {
        return 'Date invalide';
    }
}
 
$dateDuJour = '2023-11-22';
$resultat1 = getTimeLeft("2019-09-29");
$resultat2 = getTimeLeft("2020-01-30");
$resultat3 = getTimeLeft("2020-02-15");
$resultat4 = getTimeLeft("2020-05-16");
$resultat5 = getTimeLeft("2021-05-30");
$resultat6 = getTimeLeft("2022-10-17");
 
echo $resultat1 . PHP_EOL; echo'<br>';
echo $resultat2 . PHP_EOL; echo'<br>';
echo $resultat3 . PHP_EOL; echo'<br>';
echo $resultat4 . PHP_EOL; echo'<br>';
echo $resultat5 . PHP_EOL; echo'<br>';
echo $resultat6 . PHP_EOL; echo'<br>';
?>