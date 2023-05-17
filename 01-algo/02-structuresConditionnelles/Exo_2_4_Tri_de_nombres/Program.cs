using System;

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

            if (A >= B && A >= C)
            {
                if (B >= C)
                {
                    Console.WriteLine("L'ordre décroissant est " + A + ", " + B + ", " + C + ".");
                }
                else
                {
                    Console.WriteLine("L'ordre décroissant est " + A + ", " + C + ", " + B + ".");
                }
            }
            else if (B >= A && B >= C)
            {
                if (A >= C)
                {
                    Console.WriteLine("L'ordre décroissant est " + B + ", " + A + ", " + C + ".");
                }
                else
                {
                    Console.WriteLine("L'ordre décroissant est " + B + ", " + C + ", " + A + ".");
                }
            }
            else if (C >= A && C >= B)
            {
                if (A >= B)
                {
                    Console.WriteLine("L'ordre décroissant est " + C + ", " + A + ", " + B + ".");
                }
                else
                {
                    Console.WriteLine("L'ordre décroissant est " + C + ", " + B + ", " + A + ".");
                }
            }
        }
    }
}






