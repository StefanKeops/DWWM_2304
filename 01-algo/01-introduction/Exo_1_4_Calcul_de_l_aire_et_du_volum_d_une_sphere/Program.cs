namespace Exo_1_4_Calcul_de_l_aire_et_du_volum_d_une_sphere
{
    internal class Program
    {
        static void Main(string[] args)
        {
                int R;
                double aire;
                double volume;
                double pi = Math.PI;
                string saisie;

            Console.WriteLine("Programme de calcul de l'aire et du volume d'une sphere");
                
            Console.WriteLine("Veuillez écrire la valeur du rayon R");

                saisie = Console.ReadLine();

                R = int.Parse(saisie);

                aire = 4 * pi * Math.Pow(R, 2);

                volume = 4 / 3 * pi * Math.Pow(R, 3);

            Console.WriteLine("L'aire de la sphere d'une rayon " + R + " est " + aire.ToString("#.##") + " cm².");

            Console.WriteLine("Le volume de la sphere d'une rayon " + R + " est " + volume.ToString("#.##") + "cm³.");

            Console.ReadLine();
        }
    }
}