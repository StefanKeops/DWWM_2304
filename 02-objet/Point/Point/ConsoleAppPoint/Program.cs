using System.Drawing;
using CL_Points;

namespace ConsoleAppPoint
{
    internal class Program
    {
        static void Main(string[] args)
        {

            Points point = new Points(2, 6);
            Console.WriteLine(point.GetPosition());

            point.Deplacer(0, 6);
            Console.WriteLine(point.GetPosition());

            Console.WriteLine(point.ToString());

            Points symetriqueAxeAbscisses = point.PointSymetriqueAxeAbscisses();
            Console.WriteLine(symetriqueAxeAbscisses.GetPosition());

            Points symetriqueAxeOrdonneeds = point.PointSymetriqueAxeOrdonnees();
            Console.WriteLine(symetriqueAxeOrdonneeds.GetPosition());

            point.PointSymetriqueOrigine();
            Console.WriteLine(point.GetPosition());

            point.PermuterCoordonees();
            Console.WriteLine(point.GetPosition());
        }
    }
}