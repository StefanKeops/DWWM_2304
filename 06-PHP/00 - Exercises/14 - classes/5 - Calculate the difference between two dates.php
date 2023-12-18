<?php

class DateDifferenceCalculator
{
    private $date1;
    private $date2;

    public function __construct($date1, $date2)
    {
        date_default_timezone_set('UTC'); // Définir la timezone selon vos besoins
        $this->date1 = new DateTime($date1);
        $this->date2 = new DateTime($date2);
    }

    public function calculateDifference()
    {
        $interval = $this->date1->diff($this->date2);
        return $interval;
    }
}

// Utilisation de la classe pour calculer la différence entre deux dates
$date1 = '1981-11-03';
$date2 = '2013-09-04';

$calculator = new DateDifferenceCalculator($date1, $date2);
$difference = $calculator->calculateDifference();

// Affichage du résultat
echo "Différence entre les dates : ";
echo $difference->y . " années, ";
echo $difference->m . " mois, ";
echo $difference->d . " jours\n";

?>
