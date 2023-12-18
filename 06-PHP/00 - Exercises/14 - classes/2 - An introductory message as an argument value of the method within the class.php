<?php

class Greeting
{
    public function displayIntroduction($name)
    {
        echo "Bonjour à tous, je m'appelle $name.\n";
    }
}

// Instanciation de la classe
$greetingInstance = new Greeting();

// Appel de la méthode avec un nom spécifique
$greetingInstance->displayIntroduction("Stefan");

?>
