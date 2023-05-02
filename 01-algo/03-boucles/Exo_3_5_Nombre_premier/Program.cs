namespace Exo_3_5_Nombre_premier
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int rest;
            int diviseur;
            bool premier = true;
            string saisie;

            Console.WriteLine("Introduisez la valeur d'un nombre");

            saisie = Console.ReadLine();

            nombre = int.Parse(saisie);

            for (diviseur = 2; diviseur <= nombre / 2; diviseur++)
            {
                rest = nombre % diviseur;

                if (rest == 0)
                {
                    premier = false;
                    break;
                }
            }
            if (premier)
            {
                Console.WriteLine(nombre + " est un nombre premier");
            }
            else
            {
            Console.WriteLine(nombre + " n'est pas un nombre premier");
            }

            }
        }
    }