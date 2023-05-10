using System.Globalization;

namespace Exo_4_5_Palidrome
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string phrase;

            do
            {
                Console.WriteLine("Ecrivez une phrase termine par un point");

                phrase = Console.ReadLine();

                if (phrase.Length == 1 && phrase[0] == '.')
                {
                    Console.WriteLine("La phrase ne doit pas être vide.");
                    continue;
                }

                bool estPalidrome = true;

                int i = 0, j = phrase.Length - 1;

                while (i < j)
                {
                    if (char.ToLower(phrase[i]) != char.ToLower(phrase[j]))
                        {
                        estPalidrome = false;
                        break;
                        }
                    i++;
                    j--;
                }

                if (estPalidrome)
                {
                    Console.WriteLine("La chaîne est un palindrome");
                }
                else
                {
                    Console.WriteLine("La chaîne n'est pas un palindrome");
                }
            }
            while (phrase[phrase.Length - 1] != '.');
        }
    }
}