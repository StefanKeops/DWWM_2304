<?php

class MyCalculator
{
    private $value1;
    private $value2;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function add()
    {
        return $this->value1 + $this->value2;
    }

    public function subtract()
    {
        return $this->value1 - $this->value2;
    }

    public function multiply()
    {
        return $this->value1 * $this->value2;
    }

    public function divide()
    {
        // Check for division by zero
        if ($this->value2 != 0) {
            return $this->value1 / $this->value2;
        } else {
            return "Cannot divide by zero.";
        }
    }
}

// Utilisation de la classe pour effectuer des opérations
$mycalc = new MyCalculator(12, 6);

echo "Addition : " . $mycalc->add() . "\n";
echo "<br>";
echo "Soustraction : " . $mycalc->subtract() . "\n"; echo "<br>";
echo "Multiplication : " . $mycalc->multiply() . "\n"; echo "<br>";
echo "Division : " . $mycalc->divide() . "\n";

?>
