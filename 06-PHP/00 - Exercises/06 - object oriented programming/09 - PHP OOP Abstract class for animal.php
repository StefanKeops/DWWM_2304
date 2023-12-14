<?php

// Classe abstraite Animal
abstract class Animal
{
    // Méthode abstraite pour manger
    abstract public function eat();

    // Méthode abstraite pour faire un son
    abstract public function makeSound();
}

// Sous-classe Dog
class Dog extends Animal
{
    // Implémentation de la méthode pour manger
    public function eat()
    {
        echo "Le chien mange de la nourriture pour chiens.<br>";
    }

    // Implémentation de la méthode pour faire un son
    public function makeSound()
    {
        echo "Le chien aboie.<br>";
    }
}

// Sous-classe Cat
class Cat extends Animal
{
    // Implémentation de la méthode pour manger
    public function eat()
    {
        echo "Le chat mange de la nourriture pour chats.<br>";
    }

    // Implémentation de la méthode pour faire un son
    public function makeSound()
    {
        echo "Le chat miaule.<br>";
    }
}

// Sous-classe Bird
class Bird extends Animal
{
    // Implémentation de la méthode pour manger
    public function eat()
    {
        echo "L'oiseau picore des graines.<br>";
    }

    // Implémentation de la méthode pour faire un son
    public function makeSound()
    {
        echo "L'oiseau gazouille.<br>";
    }
}

// Exemple d'utilisation des classes
try {
    // Créer une instance de la classe Dog
    $chien = new Dog();
    echo "Chien :<br>";
    $chien->eat();
    $chien->makeSound();

    // Créer une instance de la classe Cat
    $chat = new Cat();
    echo "Chat :<br>";
    $chat->eat();
    $chat->makeSound();

    // Créer une instance de la classe Bird
    $oiseau = new Bird();
    echo "Oiseau :<br>";
    $oiseau->eat();
    $oiseau->makeSound();

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
