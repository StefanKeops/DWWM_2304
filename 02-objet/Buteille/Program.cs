using System;
using System.Numerics;

namespace Buteille
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int capaciteEnMl = 800;
            int capaciteEnMl2 = 375;
            int capaciteEnMl3 = 1600;
            int contenanceEnMl = 750;
            int contenanceEnMl2 = 333;
            int contenanceEnMl3 = 1500;
            bool estFerme = true;
            bool estFerme2 = true;
            bool estFerme3 = true;
            int hauteurEnCm = 30;
            int hauteurEnCm2 = 20;
            int hauteurEnCm3 = 30;
            int largeurEnMm = 20;
            int largeurEnMm2 = 18;
            int largeurEnMm3 = 20;
            string nom = "Ace of Spades Gold Rose";
            string nom2 = "Coca Cola Zero";
            string nom3 = "Evian Natural";
            double prixEnEuro = 46.86;
            double prixEnEuro2 = 0.50;
            double prixEnEuro3 = 0.20;
            string reponse;
            string a = "a";
            string b = "b";
            string c = "c";

            Console.WriteLine("Programme Ma Bouteille");

            do
            {
                Console.WriteLine("Choisissez la bouteille dans laquelle vous souhaitez mettre le liquide (a, b, c) :");

                reponse = Console.ReadLine();
            }
            while (reponse != a && reponse !=b && reponse !=c);

            if (reponse == a)
            {
                string caracteristics = Champagne(capaciteEnMl, contenanceEnMl, nom, hauteurEnCm, largeurEnMm, prixEnEuro);
                Console.WriteLine("Vous avez choisi une bouteille de champagne: " + caracteristics);
            }

            else if (reponse == b)
            {
                string caracteristics2 = CocaCola(capaciteEnMl2, contenanceEnMl2, nom2, hauteurEnCm2, largeurEnMm2, prixEnEuro2);
                Console.WriteLine("Vous avez choisi une bouteille de Coca Cola: " + caracteristics2);
            }

            else if (reponse == c)
            {
                string caracteristics3 = Evian(capaciteEnMl3, contenanceEnMl3, nom3, hauteurEnCm3, largeurEnMm3, prixEnEuro3);
                Console.WriteLine("Vous avez choisi une bouteille de Coca Cola: " + caracteristics3);
            }
        }
        public static string Champagne(int capaciteEnMl, int contenanceEnMl, string nom, int hauteurEnCm, int largeurEnMm, double prixEnEuro)
        {
            string caracteristics = nom + " avec les caractéristiques suivantes: " + capaciteEnMl + " ml, capacité maximale, " + contenanceEnMl + " ml, capacité optimale, avec une hauteur de " + hauteurEnCm + " cm, " + largeurEnMm + " cm de largeur de cou, et un prix de " + prixEnEuro + " euro.";
            return caracteristics;
        }

        public static string CocaCola(int capaciteEnMl2, int contenanceEnMl2, string nom2, int hauteurEnCm2, int largeurEnMm2, double prixEnEuro2)
        {
            string caracteristics2 = nom2 + " avec les caractéristiques suivantes: " + capaciteEnMl2 + " ml, capacité maximale, " + contenanceEnMl2 + " ml, capacité optimale, avec une hauteur de " + hauteurEnCm2 + " cm, " + largeurEnMm2 + " cm de largeur de cou, et un prix de " + prixEnEuro2 + " euro.";
            return caracteristics2;
        }
        public static string Evian(int capaciteEnMl3, int contenanceEnMl3, string nom3, int hauteurEnCm3, int largeurEnMm3, double prixEnEuro3)
        {
            string caracteristics3 = nom3 + " avec les caractéristiques suivantes: " + capaciteEnMl3 + " ml, capacité maximale, " + contenanceEnMl3 + " ml, capacité optimale, avec une hauteur de " + hauteurEnCm3 + " cm, " + largeurEnMm3 + " cm de largeur de cou, et un prix de " + prixEnEuro3 + " euro.";
            return caracteristics3;
        }
        public class Buteille
        {
            private int capaciteEnMl;
            private int contenanceEnMl;
            private bool estFerme;
            private string nom;
            private int hauteurEnCm;
            private int largeurEnMm;
            private double prixEnEuro;
            public Bouteille(int contenanceEnMl, int capaciteEnMl, bool estFerme, string nom, int hauteurEnCm, int largeurEnMm, double prixEnEuro)
            {
                this.capaciteEnMl = capaciteEnMl;
                this.contenanceEnMl = contenanceEnMl;
                this.estFerme = estFerme;
                this.nom = nom;
                this.hauteurEnCm = hauteurEnCm;
                this.largeurEnMm = largeurEnMm;
                this.prixEnEuro = prixEnEuro;
            }
        }
    }
}