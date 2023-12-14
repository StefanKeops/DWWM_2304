<?php

// Classe ShoppingCart
class ShoppingCart
{
    // Propriétés
    private $items; // Tableau pour stocker les articles dans le panier
    private $total; // Propriété pour stocker le coût total

    // Constructeur pour initialiser le panier
    public function __construct()
    {
        $this->items = [];
        $this->total = 0;
    }

    // Méthode pour ajouter un article au panier
    public function addItem($itemName, $price, $quantity = 1)
    {
        $item = [
            'name' => $itemName,
            'price' => $price,
            'quantity' => $quantity
        ];

        // Ajouter l'article au panier
        $this->items[] = $item;

        // Mettre à jour le coût total
        $this->updateTotal();
    }

    // Méthode pour calculer le coût total
    private function updateTotal()
    {
        $this->total = 0;

        foreach ($this->items as $item) {
            $this->total += $item['price'] * $item['quantity'];
        }
    }

    // Méthode pour obtenir le coût total
    public function getTotal()
    {
        return round($this->total, 2); // Résultat arrondi à deux décimales
    }

    // Méthode pour obtenir les articles dans le panier
    public function getItems()
    {
        return $this->items;
    }
}

// Exemple d'utilisation
try {
    // Créer une instance de la classe ShoppingCart
    $cart = new ShoppingCart();

    // Ajouter des articles au panier
    $cart->addItem("Produit 1", 20.99, 2);
    $cart->addItem("Produit 2", 15.49, 1);
    $cart->addItem("Produit 3", 10.00, 3);

    // Afficher les articles dans le panier
    echo "Articles dans le panier :<br>";
    foreach ($cart->getItems() as $item) {
        echo "{$item['name']} - Prix unitaire : {$item['price']} €, Quantité : {$item['quantity']}<br>";
    }

    // Afficher le coût total
    echo "Coût total du panier : " . $cart->getTotal() . " €<br>";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
