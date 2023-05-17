using System;
using System.Collections;

namespace Exo_6_1_Fruits_et_legumes
{
    class Program
    {
        static void Main(string[] args)
        {
            ArrayList legumes = new ArrayList();
            string saisie;
            bool valeurAccepte;

            do
            {
                Console.WriteLine("Entrez un légume suivi de son prix au kilo (ex : carottes 2.99) ou tapez 'go' pour terminer : ");
                saisie = Console.ReadLine();

                if (saisie == "go")
                {
                    valeurAccepte = true;
                }
                else
                {
                    string[] elements = saisie.Split(" ");

                    if (elements.Length != 2 || !double.TryParse(elements[1], out double prix))
                    {
                        Console.WriteLine("Valeur saisie invalide");
                    }
            }
            
    }
}