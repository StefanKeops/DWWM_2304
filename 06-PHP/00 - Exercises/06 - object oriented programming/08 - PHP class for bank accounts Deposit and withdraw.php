<?php

class BankAccount
{
    // Propriétés
    private $accountNumber;
    private $balance;

    // Constructeur
    public function __construct($accountNumber, $initialBalance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Méthode pour déposer de l'argent
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Dépôt de $amount € effectué. Nouveau solde : $this->balance €.<br>";
        } else {
            echo "Le montant du dépôt doit être supérieur à zéro.<br>";
        }
    }

    // Méthode pour retirer de l'argent
    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Retrait de $amount € effectué. Nouveau solde : $this->balance €.<br>";
        } elseif ($amount <= 0) {
            echo "Le montant du retrait doit être supérieur à zéro.<br>";
        } else {
            echo "Fonds insuffisants pour effectuer le retrait.<br>";
        }
    }

    // Méthode pour afficher le solde actuel
    public function displayBalance()
    {
        echo "Solde actuel du compte $this->accountNumber : $this->balance €.<br>";
    }
}

// Exemple d'utilisation
try {
    // Créer une instance de la classe BankAccount
    $compteBancaire = new BankAccount("123456789");

    // Afficher le solde initial
    $compteBancaire->displayBalance();

    // Effectuer un dépôt
    $compteBancaire->deposit(100);

    // Effectuer un retrait
    $compteBancaire->withdraw(50);

    // Afficher le solde mis à jour
    $compteBancaire->displayBalance();

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
