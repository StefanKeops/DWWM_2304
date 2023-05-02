namespace Exo_3_3_Intervalle_entre_2_nombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int A;
            int B;
            int i;
            string saisie;

            Console.WriteLine("Introduisez le premiere numbre entier A");

            saisie = Console.ReadLine();

            A = int.Parse(saisie);

            Console.WriteLine("Introduisez le premiere numbre entier B");

            saisie = Console.ReadLine();

            B = int.Parse(saisie);

            Console.WriteLine("Le nombre entiere dans l'intervalle sont: ");

                for (i = A; i <= B; i++)
                {
                Console.Write(i);
                }
        }
    }
}