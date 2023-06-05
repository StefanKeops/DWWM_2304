using System.ComponentModel.DataAnnotations.Schema;

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
            int largeurEnCm = 20;
            int largeurEnCm2 = 18;
            int largeurEnCm3 = 20;
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
        }
    }
}