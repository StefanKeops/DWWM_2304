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
            const string d = "d";w
            const string quit = "quit";

            // Lister les bouteilles

            Bouteille bouteille = new Bouteille("model", 1000, 950, true, "defaut", 30, 20, 0.00);
            Bouteille champagne = new Bouteille("bouteille de champagne", 750, 800, true, "Ace of Spades Gold Rose", 30, 20, 46.86);
            Bouteille cocaCola = new Bouteille("bouteille de Coca Cola", 333, 375, true, "Coca Cola Zero", 20, 18, 0.50);
            Bouteille evian = new Bouteille("bouteille de Evian", 1500, 1600, true, "Evian Natural", 30, 20, 0.20);

            do
            {

                // Choisir une bouteille

                do
                {
                    Console.WriteLine("Choisissez la bouteille dans laquelle vous souhaitez mettre le liquide (tapez a (pour bouteille de champagne), b (pour bouteille de Coca Cola), c (pour bouteille de Evian) ou quit pour quitter");
                    reponse = Console.ReadLine();
                }
                while (reponse != a && reponse != b && reponse != c && reponse != quit);

                Bouteille bouteilleChoisie = null;

                if (reponse == a)
                {
                    bouteilleChoisie = champagne;
                }
                else if (reponse == b)
                {
                    bouteilleChoisie = cocaCola;
                }
                else if (reponse == c)
                {
                    bouteilleChoisie = evian;
                }

                Console.WriteLine("Vous avez choisi une " + bouteilleChoisie.getType() + ": " + bouteilleChoisie.getNom() + ", ses caractéristiques sont: contenance: " + bouteilleChoisie.getContenanceEnMl() + " ml " + "(avec une capacite totale de " + bouteilleChoisie.getCapaciteEnMl() + "ml), une hauteur de " + bouteilleChoisie.getHauteurEnCm() + ", largeur de cou de " + bouteilleChoisie.getLargeurEnMm() + ", avec un prix de " + bouteilleChoisie.getPrixEnEuro() + " euro.");

                // Choisir une action

                do
                {
                    Console.WriteLine("Que voulez-vous que nous fassions ensuite, garder cette bouteille, choisir une autre, ou sortir de programme?(reponse posibles: tapez 'a' pour garder la bouteille, 'b' pour choisir une autre ou 'quit' pour sortir.)");
                }
                while (reponse != a && reponse != b && reponse != c && reponse != quit);

                if (reponse == quit)
                {
                    Console.WriteLine("Quelque chose s'est mal passé ou tu as trop bu et tu es ivre");
                    Console.WriteLine();
                }
                else
                {

                    // Donner une précision de l'action

                    // Afficher le résultat

                    // Recommencer ou finir

                }

            } while (reponse != quit);
        }
    }
}