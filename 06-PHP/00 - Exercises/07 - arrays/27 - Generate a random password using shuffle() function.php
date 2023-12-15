<?php

// Fonction pour générer un mot de passe aléatoire
function genererMotDePasseAleatoire($longueur = 12)
{
    // Définir les caractères possibles pour le mot de passe
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+=-';

    // Convertir la chaîne de caractères en tableau
    $caracteresArray = str_split($caracteres);

    // Mélanger le tableau de caractères
    shuffle($caracteresArray);

    // Prendre les premiers caractères en fonction de la longueur spécifiée
    $motDePasse = implode('', array_slice($caracteresArray, 0, $longueur));

    return $motDePasse;
}

// Appeler la fonction pour générer un mot de passe aléatoire
$motDePasseAleatoire = genererMotDePasseAleatoire();

// Afficher le mot de passe généré
echo "Mot de passe aléatoire : $motDePasseAleatoire\n";

?>
