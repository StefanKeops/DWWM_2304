namespace Exo_2_4_Tri_de_nombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int A;
            int B;
            int C;
            string saisie;

            Console.WriteLine("Programme Tri de trois nombres");

            Console.WriteLine("Veuillez donner la valeur du A");

            saisie = Console.ReadLine();

            A = int.Parse(saisie);

            Console.WriteLine("Veuillez donner la valeur du B");

            saisie = Console.ReadLine();

            B = int.Parse(saisie);

            Console.WriteLine("Veuillez donner la valeur du C");

            saisie = Console.ReadLine();

            C = int.Parse(saisie);

            if (A > B)
            {
                if (B > C)
                {
                    Console.WriteLine("L'ordre decroissant est " + A + " , " + B + " , " + C + ".");
                }
                else
                {
                    if ((A > B) && (B < C))
                    {
                        Console.WriteLine("L'ordre decroissant est " + A + " , " + C + " , " + B + ".");
                    }
                    else
                    {
                        Console.WriteLine("L'ordre decroissant est " + C + " , " + A + " , " + B + ".");
                    }
                }
            }
            else
                if (A > C)
            {
                Console.WriteLine("L'ordre decroissant est " + B + " , " + A + " , " + C + ".");
            }
            else
            {
                if ((B > C) && (A < C))
                {
                    Console.WriteLine("L'ordre decroissant est " + B + " , " + C + " , " + A + ".");
                }
                else
                {
                    Console.WriteLine("L'ordre decroissant est " + C + " , " + B + " , " + A + ".");
                }
            }
        
        Console.WriteLine();

        }
    }
}