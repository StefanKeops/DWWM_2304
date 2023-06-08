using CL_Bouteille;

namespace ConsoleAppBouteille
{

    internal class Program
    {
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
                Console.WriteLine("Vous avez choisi une " + champagne.GetType() + ": " + champagne.getNom() + ", ses caractéristiques sont: contenance: " + champagne.getContenanceEnMl() + " ml " + "(avec une capacite totale de " + champagne.getCapaciteEnMl() + "ml), une hauteur de " + champagne.getHauteurEnCm() + " largeur de cou de " + champagne.getLargeurEnMm() + ", avec un prix de " + champagne.getPrixEnEuro() + " euro.");



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
                        Console.WriteLine("Donc on garde celui-ci... qu'est-ce que tu veux qu'on en fasse? (reponse posibles: tapez 'a' pour ouvrir la bouteille ou 'q' pour renoncer et sortir).");



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

                        do
                        {
                            Console.WriteLine("La bouteille est ouverte, vous voulez vider ou ajouter du liquide? (reponse posibles: tapez 'a' pour vider du liquid de la bouteille, 'b' pour ajouter du liquid dans la bouteille ou 'q' pour renoncer et sortir)");

                            reponse = Console.ReadLine();
                        }
                        while (reponse != a && reponse != b && reponse != q);

                        if (reponse == a)
                        {
                            int demandeVider;

                            bool pourcentage = false;

                            do
                            {
                                Console.WriteLine("Quel pourcentage du volume total de la bouteille voulez-vous vider du buteille? réponse possible un numero entier entre 0 et 100, 'q' - sortie du programme");

                                reponse = Console.ReadLine();

                                if (reponse == "q")
                                {
                                    return;
                                }

                                pourcentage = int.TryParse(reponse, out demandeVider);

                                if (!pourcentage || demandeVider < 0 || demandeVider > 100)
                                {
                                    Console.WriteLine("Option invalide. Veuillez entrer un numéro entier valide entre 0 et 100.");
                                    pourcentage = false;
                                }
                            }
                            while (!pourcentage);

                            bool aReussi2 = champagne.Vider(demandeVider);

                            if (aReussi2 == true)
                            {
                                double nouvelleContenanceEnMl = champagne.getContenanceEnMl();
                                Console.WriteLine("La quantité de liquide a été vudée du bouteille");
                                Console.WriteLine("La nouvelle contenance de la bouteille est de : " + nouvelleContenanceEnMl + " ml");
                            }
                            else
                            {
                                Console.WriteLine("La quantité de liquide n'a pas pu être vidée du bouteille");
                            }
                        }
                        else
                        {
                            int demandeAjouter;

                            bool pourcentage2 = false;

                            do
                            {
                                Console.WriteLine("Quel pourcentage du volume total de la bouteille voulez-vous ajouter à l'intérieur,  ? réponse possible un numero entier entre 0 et 100, 'q' - sortie du programme");

                                reponse = Console.ReadLine();

                                if (reponse == "q")
                                {
                                    return;
                                }

                                pourcentage2 = int.TryParse(reponse, out demandeAjouter);

                                if (!pourcentage2 || demandeAjouter < 0 || demandeAjouter > 100)
                                {
                                    Console.WriteLine("Option invalide. Veuillez entrer un numéro entier valide entre 0 et 100.");
                                    pourcentage2 = false;
                                }
                            }
                            while (!pourcentage2);

                            bool aReussi3 = champagne.Remplir(demandeAjouter);

                            if (aReussi3 == true)
                            {
                                double nouvelleContenanceEnMl = champagne.getContenanceEnMl();
                                Console.WriteLine("La quantité de liquide a été ajoutée à la bouteille");
                                Console.WriteLine("La nouvelle contenance de la bouteille est de : " + nouvelleContenanceEnMl + " ml");
                            }
                            else
                            {
                                Console.WriteLine("La quantité de liquide n'a pas pu être ajoutée à la bouteille");
                            }
                        }
                    }
                }
            }
        }
    }
}