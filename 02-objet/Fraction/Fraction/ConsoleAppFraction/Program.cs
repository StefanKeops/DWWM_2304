using CL_Fraction;
using System.Drawing;
using System;

namespace ConsoleAppFraction
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Fraction f1 = new Fraction(12, 7);
            Console.WriteLine(f1.ToString());

            Fraction f2 = new Fraction();
            Console.WriteLine(f2.ToString());

            Fraction f3 = new Fraction(9);
            Console.WriteLine(f3.ToString());

            Fraction f4 = new Fraction(4, 7);
            f4.Oppose();
            Console.WriteLine(f4.ToString());

            Fraction f5 = new Fraction(4, 7);
            f5.Inverse();
            Console.WriteLine(f5.ToString());

            Fraction f6 = new Fraction(11, 7);
            Fraction f7 = new Fraction(5, 4);
            bool estSuperieur = f6.SuperieurA(f7);
            Console.WriteLine(estSuperieur);

            Fraction f8 = new Fraction(11, 7);
            Fraction f9 = new Fraction(22, 14);
            bool estEgal = f8.EgalA(f9);
            Console.WriteLine(estEgal);

            Fraction f10 = new Fraction(120, -150);
            Console.WriteLine(f10.ToDisplay());

            Fraction f11 = new Fraction(28, 6);
            Fraction f12 = new Fraction(9, 1);
            Fraction resultat = f11.Plus(f12);
            Console.WriteLine(resultat.ToDisplay());

            Fraction f13 = new Fraction(9, 13);
            Fraction resultat2 = f11.Moins(f13);
            Console.WriteLine(resultat2.ToDisplay());

            Fraction f14 = new Fraction(9, 21);
            Fraction resultat3 = f11.Multiplie(f14);
            Console.WriteLine(resultat3.ToDisplay());

            Fraction f15 = new Fraction(9, 46);
            Fraction resultat4 = f11.Divise(f15);
            Console.WriteLine(resultat4.ToDisplay());
        }
    }
}