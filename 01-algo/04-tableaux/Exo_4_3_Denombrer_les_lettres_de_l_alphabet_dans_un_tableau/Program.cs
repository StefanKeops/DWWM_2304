namespace Exo_4_3_Denombrer_les_lettres_de_l_alphabet_dans_un_tableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string text;
            string alphabet = "abcdefghijklmnopqrstuvwxyz";

            do
            {
                Console.WriteLine("Ecrivez un text d'au moins 120 caractere");

                text = Console.ReadLine(); 
            }
            while (text.Length <= 120);
            {
                for (int lettre = 0; lettre < alphabet.Length; lettre++)
                {
                    int occurrence = 0;

                    for (int i = 0; i < text.Length; i++)
                    {
                        if (text[i] == alphabet[lettre])
                        {
                            occurrence++;
                        }
                    }

                    Console.WriteLine("La lettre: " + alphabet[lettre] + " est presente " + occurrence + " fois.");
                }
            }
        }
    }
}