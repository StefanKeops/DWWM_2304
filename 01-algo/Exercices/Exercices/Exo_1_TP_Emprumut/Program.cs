using System;
using System.Runtime.InteropServices;

namespace Exo_1_TP_Emprumut
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double tauxInteretAnnuel =5;
            int nombreAnneeRemboursement =4;
            double capitalEmprunte =10000;

            double mensualite = CalculMensualite(tauxInteretAnnuel, nombreAnneeRemboursement, capitalEmprunte);
           // TableauAmortissementMensuel( tauxInteretAnnuel,  mensualite, capitalEmprunte, nombreAnneeRemboursement);

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

        //public static void TableauAmortissementMensuel(double tauxInteretAnnuel, double capitalEmprunte, int nombreAnneeRemboursement)
        //{
        //    double tauxInteretMensuel = tauxInteretAnnuel / 1200;
        //    int mois = nombreAnneeRemboursement * 1200;
        //    double capitalRestant = capitalEmprunte;
            
        //    Console.WriteLine("Tableau d'amortissement:");
        //    Console.WriteLine("Mois\tPart intérêt\tPart capital\tCapital restant\tMensualité");

        //    for (int i = 0; i < mois; i++)
        //    {
        //        if (i == 0)
        //        {

        //        }
        //        else
        //        {
        //            double interetMensuel = capitalRestant * tauxInteretMensuel;
        //        double amortissementMois = mensualite - tauxInteretMensuel;
        //        capitalRestant -= amortissementMois;

        //        }

                

        //        Console.WriteLine((i + 1) + "\t" + interetMensuel.ToString("0.#") + "\t\t" + amortissementMois.ToString("0.#") + "\t\t" + capitalRestant.ToString("0") + "\t\t" + mensualite.ToString("#"));
        //    }
        //}
    }
}