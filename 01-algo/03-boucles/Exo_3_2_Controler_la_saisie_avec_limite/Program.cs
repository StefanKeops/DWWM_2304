using System;

namespace Exo_3_2_Controler_la_saisie_avec_limite
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string password;
            int compteur = 0;

            do
            {
                Console.WriteLine("Tapez votre mot de passe!");

                password = Console.ReadLine();

                compteur++;

                if (password == "formation") ;
                {
                    if (compteur == 1)
                    {
                        Console.WriteLine("Mot de passe incorrect, vous devez réessayer ; vous avez encore 2 tentatives");
                    }
                    else if (compteur == 2)
                    {
                        Console.WriteLine("Mot de passe incorrect, vous devez réessayer ; vous avez encore 1 tentative");
                    }
                    else
                    {
                        Console.WriteLine("Votre compte est bloqué");
                    }
                }
            }
            while (password != "formation" && compteur <= 3);

            Console.WriteLine("Vous êtes connecté");
        }
    }
}