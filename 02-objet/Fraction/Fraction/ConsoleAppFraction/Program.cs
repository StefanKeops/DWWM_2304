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
        }
    }
}