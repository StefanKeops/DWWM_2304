using System;
using System.Data;
using System.Runtime.CompilerServices;
using CL_Bouteille;

namespace ConsoleAppBouteille
{

    internal class Program
    {

        // Déclaration fonctions :



        // Programme :

        static void Main(string[] args)
        {
            string reponse;
            const string a = "a";
            const string b = "b";
            const string c = "c";
            const string quit = "quit";

            // Lister les bouteilles

            Bouteille bouteille = new Bouteille("model", 1000, 950, true, "defaut", 30, 20, 0.00);
            Bouteille champagne = new Bouteille("bouteille de champagne", 750, 800, true, "Ace of Spades Gold Rose", 30, 20, 46.86);
            Bouteille cocaCola = new Bouteille("bouteille de Coca Cola", 333, 375, true, "Coca Cola Zero", 20, 18, 0.50);
            Bouteille evian = new Bouteille("bouteille de Evian", 1500, 1600, true, "Evian Natural", 30, 20, 0.20);

            // Choisir une bouteille

            do
            {
                Console.WriteLine("Choisissez la bouteille dans laquelle vous souhaitez mettre le liquide (a, b, c), ou quit pour quitter");
                reponse = Console.ReadLine();
            }
            while (reponse != a && reponse != b && reponse != c && reponse != quit);

            if (reponse == a)
            {
                ManipulerBouteille(champagne);
            }
            else if (reponse == b)
            {
                ManipulerBouteille(cocaCola);
            }
            else if (reponse == c)
            {
                ManipulerBouteille(evian);
            }
            else
            {
                Console.WriteLine();
            }

            // Choisir une action

            // Donner une précision de l'action

            // Afficher le résultat

            // Recommencer ou finir

        }
    }
}