using System;
using System.Reflection;

namespace Exo_3_2_Controler_la_saisie_avec_limite
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string password = "formation";
            int tentative = 0;
            bool connecte = false;

            while (!connecte && tentative < 3)
            {
                Console.WriteLine("Tapez votre mot de passe!");

                string motDePasse = Console.ReadLine();

                if (motDePasse == password)
                {
                    connecte = true;

                    Console.WriteLine("Vous êtes connecté");
                }
                else
                {
                    Console.WriteLine("Mot de passe incorrect, vous devez réessayer");

                    tentative++;
                }
            }
            if (!connecte)
            { 
                Console.WriteLine("Votre compte est bloqué");
            }
        }
    }
}

