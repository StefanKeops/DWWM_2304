using System.Diagnostics.Metrics;

namespace Exo_4_2_1_Recherche_une_lettre_dans_un_phrase
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string chaine = "RECHERCHER UNE LETTRE DANS UNE PHRASE.";
            string chaine2 = "";
            char lettre = 'F';
            char lettre2 = 'E';
            int lettreCount = 0;
            int lettreCount2 = 0;
            int index = chaine.IndexOf(" ");

            if (chaine2.Length == 0)
            {
                Console.WriteLine("LA CHAINE EST VIDE");
            }
            else
            {
                Console.WriteLine(chaine);
            }

            if (chaine.Length == 0) {
                Console.WriteLine("LA CHAINE EST VIDE");
            }

            for (int i = 0; i < chaine.Length; i++) 
        {
                if (chaine[i] == lettre)
                {
                    lettreCount ++;
                }
            }
            Console.WriteLine("Le nombre d'occurences de " + lettre + " est : " + lettreCount);

            if (chaine.Length == 0)
            {
                Console.WriteLine("LA CHAINE EST VIDE");
            }

            for (int i = 0; i < chaine.Length; i++)
            {
                if (chaine[i] == lettre2)
                {
                    lettreCount2++;
                }
            }
            Console.WriteLine("Le nombre d'occurences de " + lettre2 + " est : " + lettreCount2);
        }
    }
}