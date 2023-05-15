﻿namespace Exo_5_3_1_Conversion_temperature
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double x;
            string saisie;
            bool valeurAccepte;

            do
            {
                Console.WriteLine("Entrez une valeur à convertir suivi de l'unité de température: - C pour Celsius - F pour Fahrenheit (la valeur et l’unité de température sont séparés par un espace (exemple: 32 C pour 32 degrés Celsius))");
                saisie = Console.ReadLine();

                if (saisie.EndsWith("C"))
                {
                    if (double.TryParse(saisie.Replace(" C", "").Trim(), out x))
                    {
                        if (x < -273.15 || x > 5000000)
                        {
                            valeurAccepte = false;
                            Console.WriteLine("La valeur doit être comprise entre -273.15 et 5 000 000");
                        }
                        else
                        {
                            double fahrenheit = (x * 9 / 5) + 32;
                            Console.WriteLine("{0} C = {1:F2} F", x, fahrenheit);
                            valeurAccepte = true;
                        }
                    }
                    else
                    {
                        valeurAccepte = false;
                        Console.WriteLine("La valeur saisie n'est pas valide.");
                    }
                }
                else if (saisie.EndsWith("F"))
                {
                    if (double.TryParse(saisie.Replace(" F", "").Trim(), out x))
                    {
                        if (x < -459.67 || x > 5000000)
                        {
                            valeurAccepte = false;
                            Console.WriteLine("La valeur doit être comprise entre -459.67 et 5 000 000");
                        }
                        else
                        {
                            double celsius = (x - 32) * 5 / 9;
                            Console.WriteLine("{0} F = {1:F2} C", x, celsius);
                            valeurAccepte = true;
                        }
                    }
                    else
                    {
                        valeurAccepte = false;
                        Console.WriteLine("L'unité de température n'a pas été indiquée ou est incorrecte.");
                    }
                }
            }
            while (valeurAccepte = false);
        }
    }
}