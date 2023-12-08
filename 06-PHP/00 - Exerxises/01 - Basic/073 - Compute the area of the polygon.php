<?php

calc();

function calc()
{
    // Inițializăm un array pentru puncte
    $points = array();

    // Generăm coordonate aleatoare pentru puncte
    for ($i = 0; $i < 10; $i++) {
        // Generăm valori aleatoare pentru x și y
        $x = rand(0, 100); // Modificați limitele după necesități
        $y = rand(0, 100); // Modificați limitele după necesități

        // Adăugăm un nou obiect Point în array-ul de puncte
        $points[] = new Point($x, $y);
    }

    // Inițializăm suma ariilor triunghiurilor
    $sum = 0;

    // Punctul de referință
    $o = $points[0];

    // Calculăm ariile pentru triunghiuri consecutive
    for ($i = 1; $i < count($points) - 1; $i++) {
        $p1 = $points[$i];
        $p2 = $points[$i + 1];

        // Inițializăm un obiect Triangle
        $T = new Triangle($o, $p1, $p2);

        // Adăugăm aria la suma totală
        $sum += $T->getArea();
    }

    // Afișăm rezultatul
    echo "Aire du polygone:\n";
    echo $sum . "\n";
}

// Clasa Triangle pentru calculul ariei
class Triangle
{
    public $A, $B, $C;
    public $a, $b, $c;

    public function __construct(Point $A, Point $B, Point $C)
    {
        $this->A = $A;
        $this->B = $B;
        $this->C = $C;

        $this->a = $B->distanceFrom($C);
        $this->b = $C->distanceFrom($A);
        $this->c = $A->distanceFrom($B);
    }

    public function getArea()
    {
        $z = ($this->a + $this->b + $this->c) / 2;
        return sqrt($z * ($z - $this->a) * ($z - $this->b) * ($z - $this->c));
    }
}

// Clasa Point pentru reprezentarea punctelor și calculul distanțelor
class Point
{
    public $x, $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function distanceFrom(Point $p)
    {
        $dx = $this->x - $p->x;
        $dy = $this->y - $p->y;
        return sqrt($dx * $dx + $dy * $dy);
    }
}
