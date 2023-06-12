using System;

namespace JeuTourDeRole
{
    class Program
    {
        static void Main(string[] args)
        {
        Random random = new Random();
        int scoreJoueur = 0;
        int scoreOrdinateur = 0;

        while (scoreJoueur < 10 && scoreOrdinateur < 10)
        {
            Console.WriteLine("Choisissez un nombre (0, 1 ou 2) ou entrez un nombre négatif pour arrêter le jeu :");
            int choixJoueur;
if (!int.TryParse(Console.ReadLine(), out choixJoueur))
{
Console.WriteLine("Valeur saisie invalide. Veuillez réessayer.");
continue;
}

if (choixJoueur < 0)
{
break;
}

int choixOrdinateur = random.Next(3);

Console.WriteLine("L'ordinateur a choisi : " + choixOrdinateur);

int difference = Math.Abs(choixJoueur - choixOrdinateur);

switch (difference)
{
case 2:
if (choixJoueur > choixOrdinateur)
{
scoreJoueur++;
Console.WriteLine("Le joueur gagne 1 point.");
}
else if (choixOrdinateur > choixJoueur)
{
scoreOrdinateur++;
Console.WriteLine("L'ordinateur gagne 1 point.");
}
break;
case 1:
if (choixJoueur < choixOrdinateur)
{
scoreJoueur++;
Console.WriteLine("Le joueur gagne 1 point.");
}
else if (choixOrdinateur < choixJoueur)
{
scoreOrdinateur++;
Console.WriteLine("L'ordinateur gagne 1 point.");
}
break;
default:
Console.WriteLine("Aucun point n'est marqué.");
break;
}

Console.WriteLine("Score : Joueur = " + scoreJoueur + ", Ordinateur = " + scoreOrdinateur);
Console.WriteLine();
}

Console.WriteLine("Jeu terminé.");
Console.WriteLine("Score final : Joueur = " + scoreJoueur + ", Ordinateur = " + scoreOrdinateur);
}
}
}