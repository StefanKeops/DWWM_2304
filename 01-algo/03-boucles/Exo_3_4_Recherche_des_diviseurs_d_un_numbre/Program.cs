namespace Exo_3_4_Recherche_des_diviseurs_d_un_numbre
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int diviseur;
            string saisie;

            Console.WriteLine("Introduisez la valeur d'un nombre");

            saisie = Console.ReadLine();

            nombre = int.Parse(saisie);

            Console.WriteLine("Les diviseurs de " + nombre + " sont:");

            for (diviseur = 2; diviseur < nombre; diviseur++)
            {
                if (nombre % diviseur == 0)
                {
                    Console.WriteLine(diviseur);
                }
            }
        }
    }
}