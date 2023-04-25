namespace Exo_1_3Calcul_de_la_moyenne_de_2_numbers
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre1;
            int nombre2;
            double moyenne;
            string saisie;

            Console.WriteLine("Programme de calcul de la moyenne de 2 nombre");

            Console.WriteLine("Veuillez saisir un premier nombre");

            saisie = Console.ReadLine();

            nombre1 = Convert.ToInt32(saisie);

            Console.WriteLine("Veuillez saisir un deuxième nombre");

            saisie = Console.ReadLine();

            nombre2 = int.Parse(saisie);

            // nombre2 = int.Parse(Console.ReadLine()); - alternative

            moyenne = (nombre1 + nombre2) / 2.0;

            Console.WriteLine("La moyenne de " + nombre1 + " et " + nombre2 + " est " + moyenne + ".");

            Console.ReadLine();
        }
    }
}