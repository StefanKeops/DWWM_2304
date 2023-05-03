namespace Exo_3_3_Intervalle_entre_2_nombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int i;
            string saisieA;
            string saisieB;

            Console.WriteLine("Introduisez le premiere numbre entier A");

            saisieA = Console.ReadLine();

            a = int.Parse(saisieA);

            Console.WriteLine("Introduisez le premiere numbre entier B");

            saisieB = Console.ReadLine();

            b = int.Parse(saisieB);

            Console.WriteLine("Le nombre entiere dans l'intervalle sont: ");

            for (i = a + 1; i < b; i++)
            {
                Console.Write(i);
            }
        }
    }
}