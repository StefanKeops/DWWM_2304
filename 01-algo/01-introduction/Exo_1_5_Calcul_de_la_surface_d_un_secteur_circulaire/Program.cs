using System.ComponentModel;

namespace Exo_1_4_Calcul_de_la_surface_d_un_secteur_circulaire
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int R;
            int A;
            double pi = Math.PI;
            double surface;
            string saisie;

            Console.WriteLine("Programme de calcul de la surface d'un secteur circulaire");

            Console.WriteLine("Veuillez écrire la valeur du rayon R");

                saisie = Console.ReadLine();

                R = int.Parse(saisie);

            Console.WriteLine("Veuillez écrire la valeur du angle A");

                saisie = Console.ReadLine();

                A = int.Parse(saisie);

                surface = (pi * Math.Pow(R, 2) * A) / 360;

            Console.WriteLine("La surface d'un secteur circulaire de rayon " + R + " cm et angle " + A + " degrés est de " + surface.ToString("#.##") + "cm².");

            Console.ReadLine();
        }
    }
}