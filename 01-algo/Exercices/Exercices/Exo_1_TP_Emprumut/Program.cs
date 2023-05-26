using System;
using System.Runtime.InteropServices;

namespace Exo_1_TP_Emprumut
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double tauxInteretAnnuel = 5;
            int nombreAnneeRemboursement;
            double capitalEmprunte;
            string saisie;
            string saisie2;

            Console.WriteLine("Conseiller bancaire : Merci de nous indiquer le montant en euros que vous souhaitez emprunter");
            saisie = Console.ReadLine();
            capitalEmprunte = double.Parse(saisie);

            Console.WriteLine("Conseiller bancaire : Merci de nous indiquer pour combien d'années vous souhaitez emprunter");
            saisie2 = Console.ReadLine();
            nombreAnneeRemboursement = int.Parse(saisie2);

            double mensualite = CalculMensualite(tauxInteretAnnuel, nombreAnneeRemboursement, capitalEmprunte);
            TableauAmortissementMensuel( tauxInteretAnnuel,  capitalEmprunte, nombreAnneeRemboursement, mensualite);

            Console.WriteLine("La mensualite constante est de " + mensualite.ToString("#.##") + " Euros");
        }

        public static double CalculMensualite(double tauxInteretAnnuel, int nombreAnneeRemboursement, double capitalEmprunte)
        {
            double tauxInteretMensuel = tauxInteretAnnuel/1200;
            int mois = nombreAnneeRemboursement * 12;

            double q = 1 - Math.Pow((1 + tauxInteretMensuel), - mois);
            double constanteMensualite = capitalEmprunte * tauxInteretMensuel / q;

            return constanteMensualite;
        }

        public static void TableauAmortissementMensuel(double tauxInteretAnnuel, double capitalEmprunte, int nombreAnneeRemboursement, double mensualite)
        {
            double tauxInteretMensuel = tauxInteretAnnuel / 1200;
            int mois = nombreAnneeRemboursement * 1200;
            double capitalRestant = capitalEmprunte;
            
            Console.WriteLine("Tableau d'amortissement:");
            Console.WriteLine("------------------------------------------------------------------------------------------------------");
            Console.WriteLine("| Mois  | \tPart intérêt    | \tPart capital    | \tCapital restant | \tMensualité   |");
            Console.WriteLine("------------------------------------------------------------------------------------------------------");

            for (int i = 0; i < mois; i++)
            {
                double interetMensuel = capitalRestant * tauxInteretMensuel; 
                double amortissementMois = mensualite - interetMensuel;

                if (i == 0)
                {

                }
                else
                {
                    capitalRestant -= amortissementMois;
                }

                if (capitalRestant < 0)
                {
                    break;
                }

                Console.WriteLine("|    " + (i + 1) + "\t|        " + interetMensuel.ToString("0.#") + "\t\t|        " + amortissementMois.ToString("0.#") + "\t\t|        " + capitalRestant.ToString("0") + "\t\t|        " + mensualite.ToString("#") + "           |");
                Console.WriteLine("------------------------------------------------------------------------------------------------------");
            }
        }
    }
}