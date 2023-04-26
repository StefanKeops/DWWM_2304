namespace Exo_2_1_Tri_de_nombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int A;
            int B;
            string saisie;

            Console.WriteLine("Programme Tri de nombres");

            Console.WriteLine("Veuillez donner la valeur du A");

               saisie = Console.ReadLine();

               A = int.Parse(saisie);

            Console.WriteLine("Veuillez donner la valeur du B");

                saisie = Console.ReadLine();

                B = int.Parse(saisie);

            if (A > B)
            {

                Console.WriteLine("Afficher " + B + "," + A + ".");

            }
            else
            { 

                Console.WriteLine("Afficher " + A + "," + B + ".");
            }

            Console.ReadLine();
        }
    }
}