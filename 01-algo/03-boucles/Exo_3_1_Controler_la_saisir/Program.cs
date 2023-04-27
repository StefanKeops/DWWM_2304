namespace Exo_3_1_Controler_la_saisir
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string prenom;

            Console.WriteLine("Program Contrôler la saisie");

            do
            {
                Console.WriteLine("Donnez votre prénom! (votre prénom doit contenir au moins 2 caractères)");

                prenom = Console.ReadLine();
            }
            while (prenom.Length < 2);

            Console.WriteLine("Bonjour " + prenom);

        Console.WriteLine();
        }
    }
}