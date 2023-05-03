namespace Exo_3_5_Nombre_premier
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int diviseur =2;
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

            while (diviseur < nombre && premier)
            {
                if (nombre % diviseur == 0)
                {
                    premier = false;
                }
                diviseur++;
            }

            if (premier && nombre > 1)
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