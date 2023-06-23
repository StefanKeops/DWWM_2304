namespace CL_CompteBancaire
{
    public class CompteBancaire
    {
        private int decouvertAutorize;
        private string nomProprietaire;
        private int numeroUniqueIdentification;
        private decimal solde;

        public CompteBancaire()
        {
            CompteBancaire compte = new CompteBancaire();
            CompteBancaire compte1 = new CompteBancaire(0123456789, "Stefan", 1500, -300);
            Console.WriteLine(compte.ToString());
            Console.WriteLine(compte1.ToString());
        }

        public CompteBancaire(int numeroUniqueIdentification, string nomProprietaire, decimal solde, int decouvertAutorise)
        {
            this.numeroUniqueIdentification = numeroUniqueIdentification;
            this.nomProprietaire = nomProprietaire;
            this.solde = solde;
            this.decouvertAutorize = decouvertAutorise;
        }

        public override string ToString()
        {
            return "Numéro d'identification unique: " + numeroUniqueIdentification + "Nom proprietaire: " + nomProprietaire + "Solde: " + solde + "Decouvert autorise: " + decouvertAutorize;
        }

    }
}