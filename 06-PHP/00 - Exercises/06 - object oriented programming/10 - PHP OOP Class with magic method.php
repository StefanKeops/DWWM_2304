<?php

class Person
{
    // Propriétés
    private $name;
    private $age;

    // Constructeur
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Méthode magique pour afficher les informations de la personne
    public function __toString()
    {
        return "Nom : $this->name, Age : $this->age ans";
    }
}

// Exemple d'utilisation
try {
    // Créer une instance de la classe Person
    $personne = new Person("Jean Dupont", 25);

    // Afficher les informations de la personne en utilisant la méthode magique __toString()
    echo $personne;

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
