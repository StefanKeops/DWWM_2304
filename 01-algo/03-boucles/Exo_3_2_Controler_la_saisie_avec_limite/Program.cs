using System;

namespace Exo_3_2_Controler_la_saisie_avec_limite
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string password;
            int compteur = 0;
            int tentative = 3;

            do
            {
                Console.WriteLine("Tapez votre mot de passe!");

                password = Console.ReadLine();

                compteur++;

                while (password == "formation" && (tentative - compteur) == 0 ) ;
                {
                    Console.WriteLine("Mot de passe incorrect, vous devez réessayer ; vous avez encore " + (tentative - compteur) + " tentatives");
                    { 
                    while (password != "formation" && compteur = 3);

                        Console.WriteLine("Votre compte est bloqué");
                    }
                }
            }
            while (password != "formation" && compteur <= 3);

            Console.WriteLine("Vous êtes connecté");
        }
    }
}