using System;
using System.Numerics;
using System.Reflection.Metadata.Ecma335;

namespace Buteille
{
    public class Bouteille
    {
        private int capaciteEnMl;
        private int contenanceEnMl;
        private bool estFerme;
        private string nom;
        private int hauteurEnCm;
        private int largeurEnMm;
        private double prixEnEuro;
        private double vide;
        public Bouteille(int contenanceEnMl, int capaciteEnMl, bool estFerme, string nom, int hauteurEnCm, int largeurEnMm, double prixEnEuro)
        {
            this.capaciteEnMl = capaciteEnMl;
            this.contenanceEnMl = contenanceEnMl;
            this.estFerme = estFerme;
            this.nom = nom;
            this.hauteurEnCm = hauteurEnCm;
            this.largeurEnMm = largeurEnMm;
            this.prixEnEuro = prixEnEuro;
            this.vide = vide;
        }

        public string getNom()
        {
            return this.nom;
        }

        public int getcapaciteEnMl()
        {
            return this.capaciteEnMl;
        }

        public int getcontenanceEnMl()
        {
            return this.contenanceEnMl;
        }

        public int gethauteurEnCm()
        {
            return this.hauteurEnCm;
        }

        public int getlargeurEnMm()
        {
            return this.largeurEnMm;
        }

        public double getprixEnEuro()
        {
            return this.prixEnEuro;
        }

        public bool Ouvrir()
        {
            if (this.estFerme)
            {
                return false;
            }
            else
            {
                return true;
            }

        }

        public bool Fermer()
        {
            if(this.estFerme)
            {
                return false;
            }
            else
            {
                return true ;
            }
        }

        public bool RemplirTouT()
        {
            if (this.estFerme = false)
            {
                estFerme = true;
                double diference = this.capaciteEnMl - this.contenanceEnMl;
                double complet = this.contenanceEnMl + diference;
                return true;
            }
            else
            {
                double diference = this.capaciteEnMl - this.contenanceEnMl;
                double complet = this.contenanceEnMl + diference;
                return true;
            }
        }

        public bool ViderTouT()
        {
            if (this.estFerme = false)
            {
               if (vide = 0)
                estFerme = true;
                double vide = this.capaciteEnMl - this.contenanceEnMl;
                return true;
            }
            else
            {
                double vide = this.capaciteEnMl - this.contenanceEnMl;
                return true;
            }
        }


    }

    internal class Program
    {
        static void Main(string[] args)
        {
            string reponse;
            const string a = "a";
            const string b = "b";
            const string c = "c";

            Bouteille champagne = new(750, 800, true, "Ace of Spades Gold Rose", 30, 20, 46.86);

            Bouteille cocaCola = new(333, 375, true, "Coca Cola Zero", 20, 18, 0.50);

            Bouteille evian = new(1500, 1600, true, "Evian Natural", 30, 20, 0.20);

            Console.WriteLine("Programme Ma Bouteille");

            do
            {
                Console.WriteLine("Choisissez la bouteille dans laquelle vous souhaitez mettre le liquide (a, b, c) :");

                reponse = Console.ReadLine();
            }
            while (reponse != a && reponse != b && reponse != c);

            if (reponse == a)
            {
                Console.WriteLine("Vous avez choisi une bouteille de champagne, " + champagne.getNom() + ", ses caractéristiques sont: contenance: " + champagne.getcontenanceEnMl() + " ml " + "(avec une capacite totale de " + champagne.getcapaciteEnMl() + "ml), une hauteur de " + champagne.gethauteurEnCm() + " largeur de cou de " + champagne.getlargeurEnMm() + ", avec un prix de " + champagne.getprixEnEuro() + " euro.");
            }

            else if (reponse == b)
            {
                Console.WriteLine("Vous avez choisi une bouteille de champagne, " + cocaCola.getNom() + ", ses caractéristiques sont: contenance: " + cocaCola.getcontenanceEnMl() + " ml " + "(avec une capacite totale de " + cocaCola.getcapaciteEnMl() + "ml), une hauteur de " + cocaCola.gethauteurEnCm() + " largeur de cou de " + cocaCola.getlargeurEnMm() + ", avec un prix de " + cocaCola.getprixEnEuro() + " euro.");
            }

            else if (reponse == c)
            {
                Console.WriteLine("Vous avez choisi une bouteille de champagne, " + evian.getNom() + ", ses caractéristiques sont: contenance: " + evian.getcontenanceEnMl() + " ml " + "(avec une capacite totale de " + evian.getcapaciteEnMl() + "ml), une hauteur de " + evian.gethauteurEnCm() + " largeur de cou de " + evian.getlargeurEnMm() + ", avec un prix de " + evian.getprixEnEuro() + " euro.");
            }
        }
    }
    
}