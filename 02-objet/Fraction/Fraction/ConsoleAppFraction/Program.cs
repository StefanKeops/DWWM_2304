using CL_Fraction;
using System.Drawing;
using System;

namespace ConsoleAppFraction
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Fraction f1 = new(12, 7);
            Console.WriteLine(f1);

            Fraction f2 = new();
            Console.WriteLine(f2);

            Fraction f3 = new (9);
            Console.WriteLine(f3);

            Fraction f4 = new (4, 7);
            f4.Oppose();
            Console.WriteLine(f4);

            Fraction f5 = new (4, 7);
            f5.Inverse();
            Console.WriteLine(f5);

            Fraction f6 = new (11, 7);
            Fraction f7 = new (5, 4);
            bool estSuperieur = f6.SuperieurA(f7);
            Console.WriteLine(estSuperieur);

            Fraction f8 = new (11, 7);
            Fraction f9 = new (22, 14);
            bool estEgal = f8.EgalA(f9);
            Console.WriteLine(estEgal);

            Fraction f10 = new (120, -150);
            Console.WriteLine(f10.ToDisplay());

            Fraction f11 = new (-2, -8);
            Fraction f12 = new (6, 8);
            Fraction resultat = f11 + f12;
            Console.WriteLine(resultat.ToDisplay());

            Fraction f13 = new (9, 13);
            Fraction resultat2 = f11 - f13;
            Console.WriteLine(resultat2.ToDisplay());

            Fraction f14 = new (9, 21);
            Fraction resultat3 = f11 * f14;
            Console.WriteLine(resultat3.ToDisplay());

            Fraction f15 = new (9, 45);
            Fraction resultat4 = f11 / f15;
            Console.WriteLine(resultat4.ToDisplay());
        }
    }
}