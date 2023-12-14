<?php

// Classe de base LibraryItem
class LibraryItem
{
    // Propriétés
    protected $title;
    protected $price;

    // Constructeur
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    // Méthode pour afficher les détails de l'élément de bibliothèque
    public function displayDetails()
    {
        echo "Titre : " . $this->title . "<br>";
        echo "Prix : " . $this->price . "<br>";
    }
}

// Classe Book héritant de LibraryItem
class Book extends LibraryItem
{
    // Propriété supplémentaire
    private $author;

    // Constructeur
    public function __construct($title, $author, $price)
    {
        parent::__construct($title, $price);
        $this->author = $author;
    }

    // Méthode pour afficher les détails du livre
    public function displayDetails()
    {
        parent::displayDetails();
        echo "Auteur : " . $this->author . "<br>";
    }
}

// Classe DVD héritant de LibraryItem
class DVD extends LibraryItem
{
    // Propriété supplémentaire
    private $director;

    // Constructeur
    public function __construct($title, $director, $price)
    {
        parent::__construct($title, $price);
        $this->director = $director;
    }

    // Méthode pour afficher les détails du DVD
    public function displayDetails()
    {
        parent::displayDetails();
        echo "Réalisateur : " . $this->director . "<br>";
    }
}

// Exemple d'utilisation de la hiérarchie de classes
try {
    // Créer une instance de Book
    $book = new Book("Harry Potter", "J.K. Rowling", 25.99);

    // Afficher les détails du livre
    echo "Détails du livre : <br>";
    $book->displayDetails();

    // Créer une instance de DVD
    $dvd = new DVD("Inception", "Christopher Nolan", 19.99);

    // Afficher les détails du DVD
    echo "Détails du DVD : <br>";
    $dvd->displayDetails();

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
