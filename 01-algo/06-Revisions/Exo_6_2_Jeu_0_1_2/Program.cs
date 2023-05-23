namespace Exo_6_2_Jeu_0_1_2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Random random = new Random();
            int scorePlayer = 0;
            int scoreComputer = 0;
            int player;
            int computer;

            while (scorePlayer < 10 && scoreComputer < 10)
            {
                Console.WriteLine("Choisissez un nombre (0, 1 ou 2) ou entrez un nombre négatif pour arrêter le jeu :");
                if (!int.TryParse(Console.ReadLine(), out player))
                {
                    Console.WriteLine("Valeur saisie invalide. Veuillez réessayer.");
                    continue;
                }

                if (player < 0)
                {
                    break;
                }

                computer = random.Next(3);

                Console.WriteLine("L'ordinateur a choisi : " + computer);

                int difference = Math.Abs(player - computer);

                switch (difference)
                {
                    case 2:
                        if (player > computer)
                        {
                            scorePlayer++;
                            Console.WriteLine("Le joueur gagne 1 point.");
                        }
                        else if (computer > player)
                        {
                            scoreComputer++;
                            Console.WriteLine("L'ordinateur gagne 1 point.");
                        }
                        break;
                    case 1:
                        if (player < computer)
                        {
                            scorePlayer++;
                            Console.WriteLine("Le joueur gagne 1 point.");
                        }
                        else if (computer < player)
                        {
                            scoreComputer++;
                            Console.WriteLine("L'ordinateur gagne 1 point.");
                        }
                        break;
                    default:
                        Console.WriteLine("Aucun point n'est marqué.");
                        break;
                }

                Console.WriteLine("Score : Joueur = " + scorePlayer + ", Ordinateur = " + scoreComputer);
                Console.WriteLine();
            }

            Console.WriteLine("Jeu terminé.");
            Console.WriteLine("Score final : Joueur = " + scorePlayer + ", Ordinateur = " + scoreComputer);
        }
    }
}