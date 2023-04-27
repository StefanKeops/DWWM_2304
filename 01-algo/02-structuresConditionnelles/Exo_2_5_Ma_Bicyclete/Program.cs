using System.Reflection.Metadata.Ecma335;

namespace Exo_2_5_Ma_Bicyclete
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string meteo;
            string etat;
            string reparation;
            string gameOfThrones;
            string romanPolicier;
            string oui = "oui";
            string non = "non";

            Console.WriteLine("Programme Ma Bicyclete");

            do
            {
                Console.WriteLine("Veuilez donner l'etat du meteo (s'il fait beau au pas; repondrez par 'oui' or \"non\")");
                
                meteo = Console.ReadLine();
            }
            while (meteo != "oui" && meteo != "non");

            if (meteo == oui)
            {
                do
                {
                    Console.WriteLine("Le velo est dans une bonne etat? (repondrez par 'oui' or \"non\")");

                    etat = Console.ReadLine();
                }
                while (etat != "oui" && etat != "non");

                if (etat == oui)
                {
                    Console.WriteLine("On va sortir faire une balade on velo");
                }
                else
                {
                    Console.WriteLine("On va passer chez le garagiste");

                    do
                    {
                        Console.WriteLine("Le reparations vont dureé beaucoup? (repondrez par 'oui' or \"non\")");

                        reparation = Console.ReadLine();
                    }
                    while (reparation != "oui" && reparation != "non");

                    if (reparation == non)
                    {
                        Console.WriteLine("On va sortir faire une balade on velo un peu plus tard.");
                    }
                    else
                    {
                        Console.WriteLine("On ira à pied jusqu'à l'étang pour cueillir les joncs.");
                    }
                }
            }
            else //  pas beau
            {
                Console.WriteLine("Je consacrerai ma journée à la lecture. J’aimerais relire le 1er tome de Game of Thrones.");

                do
                {
                    Console.WriteLine("Je pense posséder ce livre, il doit être dans la bibliothèque du salon. (repondrez par 'oui' or \"non\")");

                    gameOfThrones = Console.ReadLine();
                }
                while (gameOfThrones != "oui" && gameOfThrones != "non");

                if (gameOfThrones == oui)
                {
                    Console.WriteLine("Je m’installerai confortablement dans un fauteuil et je me plongerai dans la lecture.");
                }
                else
                {
                    Console.WriteLine("J’irai l’emprunter à la bibliothèque municipale.");

                    do
                    { 
                        Console.WriteLine("Je retrouve Game of Thrones a la biblioteque municipale. (repondrez par 'oui' or \"non\")");

                        gameOfThrones = Console.ReadLine();
                    }
                    while (gameOfThrones != "oui" && gameOfThrones != "non");

                    if (gameOfThrones == oui)
                    {
                        Console.WriteLine("Je rentrerai ensuite directement à la maison, je m’installerai confortablement dans un fauteuil et je me plongerai dans la lecture.");
                    }
                    else
                    {
                        Console.WriteLine("J’emprunterai un roman policier, je rentrerai ensuite directement à la maison, je m’installerai confortablement dans un fauteuil et je me plongerai dans la lecture.");
                    }
                }
            }

            Console.WriteLine();
            
        }
    }
}