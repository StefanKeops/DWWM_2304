using CL_CompteBancaire;

namespace ConsoleAppCompteBancaire
{
    public class Program
    {
        public static void Main(string[] args)
        {
            CompteBancaire compte = new CompteBancaire();
            CompteBancaire compte1 = new CompteBancaire(123456789, "Stefan", 1500, -300);
            Console.WriteLine(compte.ToString());
            Console.WriteLine(compte1.ToString());

            compte.Crediter(500);
            Console.WriteLine("Après le crédit de 500 : " + compte1.ToString());

            compte.Debiter(200);
            Console.WriteLine("Après le débit de 200 : " + compte1.ToString());

            compte.Debiter(3000); 
            Console.WriteLine("Après le débit de 3000 : " + compte1.ToString());

            CompteBancaire compte2 = new CompteBancaire(987654321, "Mircea", 2000, -500);

            Console.WriteLine("Compte 1 : " + compte1.ToString());
            Console.WriteLine("Compte 2 : " + compte2.ToString());

            compte1.Transferer(compte2, 500);

            Console.WriteLine("Après le transfert de 500 de compte 1 à compte 2 :");
            Console.WriteLine("Compte 1 : " + compte1.ToString());
            Console.WriteLine("Compte 2 : " + compte2.ToString());

            compte2.Transferer(compte1, 1000); 

            Console.WriteLine("Après le transfert de 1000 de compte 2 à compte 1 :");
            Console.WriteLine("Compte 1 : " + compte1.ToString());
            Console.WriteLine("Compte 2 : " + compte2.ToString());

            Console.WriteLine("Compte 1 : " + compte1.ToString());
            Console.WriteLine("Compte 2 : " + compte2.ToString());

            bool estSuperieur = compte1.Superieur(compte2);
            Console.WriteLine("Le solde du compte 1 est supérieur au solde du compte 2 : " + estSuperieur);

            estSuperieur = compte2.Superieur(compte1);
            Console.WriteLine("Le solde du compte 2 est supérieur au solde du compte 1 : " + estSuperieur);
        }
    }
}