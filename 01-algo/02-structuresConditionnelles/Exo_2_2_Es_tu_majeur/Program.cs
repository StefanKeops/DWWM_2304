using System.Reflection.Metadata;

namespace Exo_2_2_Es_tu_majeur
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int age;
            int majeur = 18;
            string saisie;

            Console.WriteLine("Veuillez saisir votre age s'il vous plaît.");

                saisie = Console.ReadLine();

                age = int.Parse(saisie);

            if (age >= majeur)
            {

                Console.WriteLine("Vous êtes majeur.");

            }
            else if (age < 0)
            {

                Console.WriteLine("Vous n’êtes pas encore né.");

            }
            else
            {

                Console.WriteLine("Vous êtes mineur.");

            }

            Console.WriteLine();
        }
    }
}