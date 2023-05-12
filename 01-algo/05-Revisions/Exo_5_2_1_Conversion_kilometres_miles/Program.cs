using System.Reflection.Metadata.Ecma335;

namespace Exo_5_2_1_Conversion_kilometres_miles
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double valeur;
            string saisie;
            bool valeurAccepte = true;

            do
            {
                Console.WriteLine("Entrez une valeur en kilomètres (0.01 à 1 000 000) ou 'q' pour quitter :");

                saisie = Console.ReadLine();

                if (saisie != "q")
                {
                    bool ok = double.TryParse(saisie, out valeur);
                    if (!ok || valeur < 0.01 || valeur > 1000000)
                    {
                        Console.WriteLine("Valeur invalide.");
                    }
                    else
                    {
                        double miles = valeur / 1.609;
                        Console.WriteLine("{0} kilomètres = {1:F2} miles", valeur, miles);
                    }
                }
                else
                {
                    valeurAccepte = false;
                }
            }
            while (valeurAccepte);
        }
    }
}