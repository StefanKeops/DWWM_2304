namespace Exo_3_7_Barnabe_fait_ses_courses
{
    internal class Program
    {
        static void Main(string[] args)
        {
  ;
            int nbMagasins = 0;
            float solde;
            string saisie;

            Console.WriteLine("Introduisez la valeur d'un nombre");

            saisie = Console.ReadLine();

            solde = float.Parse(saisie);

            while (solde >= (solde / 2+1)) //S>2
            {
                float depense = solde / 2 + 1;
                solde = solde - depense;
                nbMagasins++;
            }
            if (solde > 0)
            {
                    nbMagasins++;
            }

            // si j'ai encore de l'argent, je depense danss le dernier magasin

            Console.WriteLine("Barnabé a acheté dans " + nbMagasins + " magasins.");
        }
    }
}