namespace Exo_1_6_Inversion_de_2_valeurs
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int A;
            int B;
            int TMP;
            string saisie;

            Console.WriteLine("Programme pour l'inversion de 2 valeurs");

            Console.WriteLine("Veuillez écrire la valeur du A");

                saisie = Console.ReadLine();

                A = int.Parse(saisie);

            Console.WriteLine("Veuillez écrire la valeur du B");

                saisie = Console.ReadLine();

                B = int.Parse(saisie);

            Console.WriteLine("Avant la permutation: A = " + A + " et B = " + B + ".");

                TMP = A;

                A = B;

                B = TMP;

            Console.WriteLine("Apres la permutation: A = " + A + " et B = " + B + ".");

            Console.WriteLine();
        }
    }
}