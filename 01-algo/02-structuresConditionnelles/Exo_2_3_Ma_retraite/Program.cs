namespace Exo_2_3_Ma_retraite
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int age;
            int retraite = 60;
            int annees;
            string saisie;
            bool saisieOK;

            Console.WriteLine("Programme de calcul pour retraite");

           do
            {
                Console.WriteLine("Veuillez saisir votre age s'il vous plaît.");
                saisie = Console.ReadLine();
                saisieOK = int.TryParse(saisie, out age);
            }

            while (!saisieOK); 

            if (age > retraite)
            {

                annees = age - retraite;

                Console.WriteLine("Vous êtes à la retraite depuis " + annees + " années.");

            }
            else if (age < retraite && age >= 0)
            {

                annees = retraite - age;

                Console.WriteLine("Il vous reste " + annees + " années avant la retraite.");

            }
            else if (age == retraite)
            {

                Console.WriteLine("C’est le moment de prendre sa retraite.");

            }

            else
            {

                Console.WriteLine("La valeur fournie n’est pas un âge valide.");

            }

            Console.WriteLine();
        }
    }
}