using System;
using System.Data;
using System.Runtime.CompilerServices;
using CL_Bouteille;

namespace ConsoleAppBouteille
{

    internal class Program
    {

        // Déclaration fonctions :

        /*
        private static Bouteille ChoisirAutreBouteille(Bouteille champagne, Bouteille cocaCola, Bouteille evian)

        {
            string reponse;
            const string a = "a";
            const string b = "b";
            const string c = "c";
            const string quit = "quit";

            Console.WriteLine("Voici les bouteille disponibles:");
            // Afficher les bouteille
            Console.WriteLine("a - " + champagne.getNom());
            Console.WriteLine("b - " + cocaCola.getNom());
            Console.WriteLine("c - " + evian.getNom());

            do
            {
                Console.WriteLine("Choisissez une autre bouteille (a, b ou c) ou tapez 'quit' pour sortir: ");
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
            return bouteilleChoisie;
        }
        */

        // Programme :

        static void Main(string[] args)
        {
            string reponse;
            const string a = "a";
            const string b = "b";
            const string c = "c";
            const string d = "d";
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
                    reponse = Console.ReadLine();
                }
                while (reponse != a && reponse != b && reponse != c && reponse != quit);

                if (reponse == a)
                {
                    Console.WriteLine("Vous avez décidé de garder la bouteille ; que voullez-vous faire après?");
                    Console.WriteLine("reponse posible: ");
                    Console.WriteLine("a - ouvrir la bouteille");
                    Console.WriteLine("b - remplir la bouteille (pourcentage du contenu de la bouteille)");
                    Console.WriteLine("c - vider la bouteile (pourcentage du contenu de la bouteille)");
                    Console.WriteLine("d - remplir la bouteille (complet)");
                    Console.WriteLine("e - vider la bouteille (complet)");
                    Console.WriteLine("f - fermer la bouteille");
                    Console.WriteLine("g - changer la bouteille");
                    Console.WriteLine("quit - quiter");

                    if (reponse == a)
                    {
                        bool aReussi = bouteilleChoisie.Ouvrir();

                        if (aReussi == true)
                        {
                            Console.WriteLine("La bouteille a pu etre ouverte");
                        }
                        else
                        {
                            Console.WriteLine("La bouteille n'a pas pu etre ouverte car elle etait déjà ouverte");
                        }
                    }

                    if (reponse == b)
                    {
                        bool aReussi2 = bouteilleChoisie.Remplir();

                        if (aReussi2 == true)
                        {
                            Console.WriteLine("La bouteille a pu etre ouverte");
                        }
                        else
                        {
                            Console.WriteLine("La bouteille n'a pas pu etre ouverte car elle etait déjà ouverte");
                        }
                    }

                    // Donner une précision de l'action

                    // Afficher le résultat

                    // Recommencer ou finir
                }
                else if (reponse == b)
                {
                    Console.WriteLine("Vous avez décidé de choisir une autre bouteille.");
                }
                else if (reponse == quit)
                {

                }


            } while (reponse != quit);

            if (reponse == quit)
            {
                Console.WriteLine("Quelque chose s'est mal passé ou tu as trop bu et tu es ivre");
            }
        }
    }
}