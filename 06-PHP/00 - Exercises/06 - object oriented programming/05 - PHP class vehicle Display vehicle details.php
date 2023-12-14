<?php

class Vehicle
{
    // Propriétés
    private $brand;
    private $model;
    private $year;

    // Constructeur
    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Méthode pour afficher les détails du véhicule
    public function displayDetails()
    {
        echo "Marque : " . $this->brand . "<br>";
        echo "Modèle : " . $this->model . "<br>";
        echo "Année : " . $this->year . "<br>";
    }
}

// Exemple d'utilisation de la classe Vehicle
try {
    // Créer une instance de Vehicle
    $vehicle = new Vehicle("Toyota", "Camry", 2022);

    // Afficher les détails du véhicule
    echo "Détails du véhicule : <br>";
    $vehicle->displayDetails();

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
