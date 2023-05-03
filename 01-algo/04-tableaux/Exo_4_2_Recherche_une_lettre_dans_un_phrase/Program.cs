using System.Threading.Channels;

namespace Exo_4_2_Recherche_une_lettre_dans_un_phrase
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string chaine = ".";

            int index = chaine.IndexOf(" ");

            if (chaine.Length == 0 || chaine.Length == 1 && index == -1)
            {
                Console.WriteLine("LA CHAINE EST VIDE");
            }
            else
            {
                Console.WriteLine(chaine);
            }
        }
    }
}