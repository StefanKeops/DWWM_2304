<?php

// Classe de base Person
class Person
{
    // Propriétés
    protected $name;
    protected $age;

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

// Classe dérivée Employee qui étend la classe Person
class Employee extends Person
{
    // Propriétés supplémentaires
    private $salary;
    private $position;

    // Constructeur
    public function __construct($name, $age, $salary, $position)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    // Méthode pour afficher les détails de l'employé
    public function displayEmployeeDetails()
    {
        echo "Détails de l'employé :<br>";
        echo parent::__toString() . "<br>";
        echo "Salaire : $this->salary €<br>";
        echo "Poste : $this->position<br>";
    }
}

// Exemple d'utilisation des classes
try {
    // Créer une instance de la classe Employee
    $employee = new Employee("Jean Dupont", 30, 50000, "Développeur");

    // Afficher les détails de l'employé
    $employee->displayEmployeeDetails();

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
