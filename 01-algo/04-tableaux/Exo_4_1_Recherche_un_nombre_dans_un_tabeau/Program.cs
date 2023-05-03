using System.Net.Security;

namespace Exo_4_1_Recherche_un_nombre_dans_un_tabeau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int[] tableau = { 8, 16, 32, 64, 128, 256, 512 };
            int indiceDebut = 0;
            int indiceFin;
            int indiceMilieu;
            int n;
            bool trouve = false;
            string saisie;

            Console.WriteLine("Saisissez le nombre à rechercher :");

            saisie = Console.ReadLine();

            n = int.Parse(saisie);

            indiceFin = tableau.Length - 1;

            while (indiceDebut <= indiceFin)
            {
                indiceMilieu = (indiceDebut + indiceFin) / 2;

                if (tableau[indiceMilieu] == n)
                {
                    trouve = true;
                    Console.WriteLine("Le numero " + n + " etais trouve a l'indice " + indiceMilieu );
                    break;
                }
                else if (tableau[indiceMilieu] < n)
                {
                    indiceDebut = indiceMilieu + 1;
                }
                else
                {
                    indiceFin = indiceMilieu - 1;
                }
            }
            Console.WriteLine("Nombre non trouvé");
            }
        }
    }