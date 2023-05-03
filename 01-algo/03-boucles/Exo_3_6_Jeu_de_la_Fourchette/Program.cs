namespace Exo_3_6_Jeu_de_la_Fourchette
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombreRandom;
            int nombreMystere;
            int nombresEssais = 0;
            string saisie;
            
            nombreRandom = new Random().Next(1, 100);

            do
            {
                Console.WriteLine("Introduisez la valeur d'un nombre");

                saisie = Console.ReadLine();

                nombreMystere = int.Parse(saisie);

                nombresEssais++;

                if (nombreMystere < nombreRandom)
                {
                    Console.WriteLine("Le nombre saisi est trop petit.");
                }
                else if (nombreMystere > nombreRandom)
                {
                    Console.WriteLine("Le nombre saisi est trop grand.");
                }
            }
            while (nombreMystere != nombreRandom);

            Console.WriteLine("Bravo vous avez trouvé en " + nombresEssais + " essais.");


        }
    }
}