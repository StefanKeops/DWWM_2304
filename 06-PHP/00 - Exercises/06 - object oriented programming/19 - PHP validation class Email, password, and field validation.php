<?php

// Classe Validation
class Validation
{
    // Méthode statique pour valider une adresse e-mail
    public static function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true; // L'adresse e-mail est valide
        } else {
            return false; // L'adresse e-mail n'est pas valide
        }
    }

    // Méthode statique pour valider un mot de passe (au moins 8 caractères, au moins une majuscule, une minuscule et un chiffre)
    public static function validatePassword($password)
    {
        // Au moins 8 caractères, au moins une majuscule, une minuscule et un chiffre
        $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/';

        if (preg_match($pattern, $password)) {
            return true; // Le mot de passe est valide
        } else {
            return false; // Le mot de passe n'est pas valide
        }
    }

    // Méthode statique pour valider un champ de texte (non vide et sans balises HTML)
    public static function validateTextField($text)
    {
        // Vérifier si le champ est non vide et ne contient pas de balises HTML
        if (!empty($text) && strip_tags($text) === $text) {
            return true; // Le champ est valide
        } else {
            return false; // Le champ n'est pas valide
        }
    }
}

// Exemple d'utilisation
try {
    // Valider une adresse e-mail
    $email = "john.doe@example.com";
    if (Validation::validateEmail($email)) {
        echo "L'adresse e-mail est valide<br>";
    } else {
        echo "L'adresse e-mail n'est pas valide<br>";
    }

    // Valider un mot de passe
    $password = "Password123";
    if (Validation::validatePassword($password)) {
        echo "Le mot de passe est valide<br>";
    } else {
        echo "Le mot de passe n'est pas valide<br>";
    }

    // Valider un champ de texte
    $textField = "Some text without HTML tags";
    if (Validation::validateTextField($textField)) {
        echo "Le champ de texte est valide<br>";
    } else {
        echo "Le champ de texte n'est pas valide<br>";
    }

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
