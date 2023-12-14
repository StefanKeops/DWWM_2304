<?php

class Student
{
    // Propriétés
    private $name;
    private $age;
    private $grade;

    // Constructeur
    public function __construct($name, $age, $grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    // Méthode pour afficher les informations de l'étudiant
    public function afficherInformations()
    {
        echo "Informations sur l'étudiant :<br>";
        echo "Nom : " . $this->name . "<br>";
        echo "Âge : " . $this->age . " ans<br>";
        echo "Note : " . $this->grade . "<br>";
    }
}

// Exemple d'utilisation
try {
    // Créer une instance de la classe Student
    $etudiant = new Student("Jean Dupont", 18, "A");

    // Afficher les informations de l'étudiant
    $etudiant->afficherInformations();

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
