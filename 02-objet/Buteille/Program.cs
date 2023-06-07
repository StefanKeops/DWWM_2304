using System;
using System.ComponentModel;
using System.ComponentModel.Design.Serialization;
using System.Numerics;
using System.Reflection;
using System.Reflection.Metadata.Ecma335;



namespace Buteille
{
    public class Bouteille
    {
        private string type;
        private double capaciteEnMl;
        private double contenanceEnMl;
        private bool estFerme;
        private string nom;
        private int hauteurEnCm;
        private int largeurEnMm;
        private double prixEnEuro;
        public Bouteille(string type, double contenanceEnMl, double capaciteEnMl, bool estFerme, string nom, int hauteurEnCm, int largeurEnMm, double prixEnEuro)
        {
            this.type = type;
            this.capaciteEnMl = capaciteEnMl;
            this.contenanceEnMl = contenanceEnMl;
            this.estFerme = estFerme;
            this.nom = nom;
            this.hauteurEnCm = hauteurEnCm;
            this.largeurEnMm = largeurEnMm;
            this.prixEnEuro = prixEnEuro;
        }



        public string getNom()
        {
            return this.nom;
        }



        public double getcapaciteEnMl()
        {
            return this.capaciteEnMl;
        }



        public double getcontenanceEnMl()
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
                this.estFerme = false;
                return true;
            }
            else
            {
                return false;
            }



        }



        public bool Remplir(int pourcentage)
        {
            if (!this.estFerme)
            {
                double volumeAjoute = (pourcentage / 100.0) * this.capaciteEnMl;
                double nouvelleContenanceEnMl = this.contenanceEnMl + volumeAjoute;


                if (nouvelleContenanceEnMl > this.capaciteEnMl)
                {
                    return false;
                }
                else
                {
                    this.contenanceEnMl = nouvelleContenanceEnMl;
                    return true;
                }
            }
            else
            {
                return false;
            }
        }



        public bool Fermer()
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



        public bool RemplirTouT()
        {
            if (this.estFerme == false)
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
            if (!this.estFerme)
            {
                contenanceEnMl = 0;
                estFerme = true;
                return true;
            }
            else
            {
                return false;
            }
        }




    }

    internal class Program
    {
        static void Fonction()
        {

        }

        static void Main(string[] args)
        {
            string reponse;
            string saisie;
            const string a = "a";
            const string b = "b";
            const string c = "c";
            const string q = "q";


            Bouteille champagne = new("bouteille de champagne", 750, 800, true, "Ace of Spades Gold Rose", 30, 20, 46.86);



            Bouteille cocaCola = new("bouteille de Coca Cola", 333, 375, true, "Coca Cola Zero", 20, 18, 0.50);



            Bouteille evian = new("bouteille de Evian", 1500, 1600, true, "Evian Natural", 30, 20, 0.20);



            Console.WriteLine("Programme Ma Bouteille");



            do
            {
                Console.WriteLine("Choisissez la bouteille dans laquelle vous souhaitez mettre le liquide (a, b, c) :");



                reponse = Console.ReadLine();
            }
            while (reponse != a && reponse != b && reponse != c);



            if (reponse == a)
            {
                Console.WriteLine("Vous avez choisi une " + champagne.GetType() + ": " + champagne.getNom() + ", ses caractéristiques sont: contenance: " + champagne.getcontenanceEnMl() + " ml " + "(avec une capacite totale de " + champagne.getcapaciteEnMl() + "ml), une hauteur de " + champagne.gethauteurEnCm() + " largeur de cou de " + champagne.getlargeurEnMm() + ", avec un prix de " + champagne.getprixEnEuro() + " euro.");



                do
                {
                    Console.WriteLine("Que voulez-vous que nous fassions ensuite, garder cette bouteille ou sortir de programme?(reponse posibles: tapez 'a' pour garder la bouteille, 'q' pour sortir.)");



                    reponse = Console.ReadLine();
                }
                while (reponse != a && reponse != q);



                if (reponse == a)
                {
                    do
                    {
                        Console.WriteLine("Donc on garde celui-ci... qu'est-ce que tu veux qu'on en fasse? (reponse posibles: tapez 'a' pour ouvrir la bouteille ou 'q' pour renoncer et sortir.");



                        reponse = Console.ReadLine();
                    }
                    while (reponse != a && reponse != q);



                    if (reponse == a)
                    {
                        bool aReussi = champagne.Ouvrir();



                        if (aReussi == true)
                        {
                            Console.WriteLine("La bouteille a pu etre ouverte");
                        }



                        else
                        {
                            Console.WriteLine("La bouteille n'a pas pu etre ouverte car elle etait déjà ouverte");
                        }



                        int demande;
                        bool pourcentage = false;

                        do
                        {
                            Console.WriteLine("La bouteille est ouverte, quel pourcentage du volume total de la bouteille voulez-vous ajouter à l'intérieur ? réponse possible un numero entier entre 0 et 100, 'q' - sortie du programme");
                            
                            reponse = Console.ReadLine();

                            if (reponse == "q")
                            {
                                return;
                            }

                            pourcentage = int.TryParse(reponse, out demande);

                            if (!pourcentage || demande < 0 || demande > 100)
                            {
                                Console.WriteLine("Option invalide. Veuillez entrer un numéro entier valide entre 0 et 100.");
                                pourcentage = false;
                            }
                        } while (!pourcentage);

                        bool aReussi2 = champagne.Remplir(demande);

                        if (aReussi2 == true)
                        {
                            Console.WriteLine("La quantité de liquide a été ajoutée à la bouteille");
                        }
                        else
                        {
                            Console.WriteLine("La quantitéz de liquide n'a pas pu être ajoutée à la bouteille");
                        }
                    }
                }
            }
        }
    }
}



  