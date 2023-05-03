namespace Exo_3_5_Nombre_premier
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int diviseur;
            bool premier = true;
            string saisie;
            bool saisieOk;

            do
            {
                Console.WriteLine("Introduisez la valeur d'un nombre");

                saisie = Console.ReadLine();

                saisieOk = int.TryParse(saisie, out nombre);
            }
            while (!saisieOk);

            for (diviseur = 2; diviseur < nombre; diviseur++)
            {
                if (nombre % 2 == 0)
                {
                    premier = false;
                }
            }

            if (premier && nombre > 2)
            {
                Console.WriteLine("le numero " + nombre + " est premier");
            }
            else
            {
                Console.WriteLine("le numero " + nombre + " n'est pas premier");
            }

            }
        }
    }