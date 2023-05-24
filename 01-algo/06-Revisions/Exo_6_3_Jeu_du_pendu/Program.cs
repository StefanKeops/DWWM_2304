using System.Runtime.Serialization.Formatters;
using static System.Net.Mime.MediaTypeNames;

namespace Exo_6_3_Jeu_du_pendu
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string mot;
            int essai = 0;
            char lettre;

            do
            {
                Console.WriteLine("Joueur 1: Veuillez saisir un mot de plus de 5 lettres!");
                mot = Console.ReadLine();
                Console.Clear();
            }
            while (mot.Length < 5);

            char[] motRecherche = AfficherMotRecherche(mot);
            Console.WriteLine("\n-----------------mot à rechercher ------------- ");
            foreach (char item in motRecherche)
            {
                Console.Write(item + " ");
            }
            Console.WriteLine("\n--------------- fin ------------- ");

            bool gagnant = false;
            while (essai <= 6 && !gagnant)
            {
                bool letterIsValid = false;


                do
                {
                    Console.WriteLine("joueur 2: Vous devez proposer une lettre");
                    lettre = char.Parse(Console.ReadLine().ToLower());

                    if (char.IsLetter(lettre))
                    {
                        letterIsValid = true;
                    }
                    else
                    {
                        Console.WriteLine("La valeur saisie n'est pas une lettre. Veuillez réessayer.");
                    }
                }
                while (!letterIsValid);


                if (mot.Contains(lettre.ToString()))
                {
                    for (int i = 0; i < mot.Length; i++)
                    {
                       if (mot[i] == lettre)
                       {
                           motRecherche[i] = lettre;
                       }
                    }
                    Console.WriteLine("Lettre trouvée!");
                    Console.WriteLine("Mot actuel: " + new string(motRecherche));

            if (new string(motRecherche) == mot)
            {
                gagnant = true;
                Console.WriteLine("Félicitations, vous avez trouvé le mot !");
            }
            }
            else
            {
            essai++;

            Console.WriteLine("Lettre incorrecte !");
            Console.WriteLine("Nombre d'essais restants: " + (6 - essai));

            if (essai >= 6)
            {
                Console.WriteLine("Vous avez épuisé tous les essais. Le mot recherché était: " + mot);
            }
            }
            }
        }
        public static char[] AfficherMotRecherche(string _motRecherche)
        {
            char[] result = _motRecherche.ToCharArray();

            for (int i = 1; i < result.Length - 1; i++)
            {
                result[i] = '_';
            }
            return result;
        }
    }
}