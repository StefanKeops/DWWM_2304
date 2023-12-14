<?php

// Interface Comparable
interface Comparable
{
    public function compareTo($other);
}

// Classe Product implémentant Comparable
class Product implements Comparable
{
    // Propriétés
    private $name;
    private $price;

    // Constructeur
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // Méthode pour comparer les produits basés sur les prix
    public function compareTo($other)
    {
        if ($other instanceof Product) {
            // Compare les prix des produits
            if ($this->price < $other->getPrice()) {
                return -1; // Le produit actuel a un prix inférieur
            } elseif ($this->price > $other->getPrice()) {
                return 1; // Le produit actuel a un prix supérieur
            } else {
                return 0; // Les produits ont le même prix
            }
        } else {
            throw new Exception("L'objet passé n'est pas une instance de Product.");
        }
    }

    // Getter pour le prix
    public function getPrice()
    {
        return $this->price;
    }

    // Méthode magique pour afficher les informations du produit
    public function __toString()
    {
        return "Nom : $this->name, Prix : $this->price €";
    }
}

// Exemple d'utilisation
try {
    // Créer des instances de la classe Product
    $product1 = new Product("Laptop", 800);
    $product2 = new Product("Smartphone", 600);
    $product3 = new Product("Tablet", 400);

    // Comparer les produits
    echo $product1->compareTo($product2) . "<br>"; // Résultat : 1
    echo $product2->compareTo($product3) . "<br>"; // Résultat : 1
    echo $product1->compareTo($product3) . "<br>"; // Résultat : 1

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
