using System;

namespace Exo_2_4_Tri_de_nombres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int c;
            string saisie;

            Console.WriteLine("Programme Tri de trois nombres");

            Console.WriteLine("Veuillez donner la valeur du a");
            saisie = Console.ReadLine();
            a = int.Parse(saisie);

            Console.WriteLine("Veuillez donner la valeur du b");
            saisie = Console.ReadLine();
            b = int.Parse(saisie);

            Console.WriteLine("Veuillez donner la valeur du c");
            saisie = Console.ReadLine();
            c = int.Parse(saisie);

            if (a >= b && a >= c)
            {
                if (b >= c)
                {
                    Console.WriteLine("L'ordre décroissant est " + a + ", " + b + ", " + c + ".");
                }
                else
                {
                    Console.WriteLine("L'ordre décroissant est " + a + ", " + c + ", " + b + ".");
                }
            }
            else if (b >= a && b >= c)
            {
                if (a >= c)
                {
                    Console.WriteLine("L'ordre décroissant est " + b + ", " + a + ", " + c + ".");
                }
                else
                {
                    Console.WriteLine("L'ordre décroissant est " + b + ", " + c + ", " + a + ".");
                }
            }
            else if (c >= a && c >= b)
            {
                if (a >= b)
                {
                    Console.WriteLine("L'ordre décroissant est " + c + ", " + a + ", " + b + ".");
                }
                else
                {
                    Console.WriteLine("L'ordre décroissant est " + c + ", " + b + ", " + a + ".");
                }
                Console.WriteLine();
            }
        }
    }
}






