using System;

namespace CL_CompteBancaire
{
    public class CompteBancaire
    {
        private int decouvertAutorise;
        private string nomProprietaire;
        private int numeroUniqueIdentification;
        private decimal solde;

        public CompteBancaire()
        {
            this.numeroUniqueIdentification = 0;
            this.nomProprietaire = "";
            this.solde = 0;
            this.decouvertAutorise = 0;
        }

        public CompteBancaire(int numeroUniqueIdentification, string nomProprietaire, decimal solde, int decouvertAutorise)
        {
            this.numeroUniqueIdentification = numeroUniqueIdentification;
            this.nomProprietaire = nomProprietaire;
            this.solde = solde;
            this.decouvertAutorise = decouvertAutorise;
        }

        public override string ToString()
        {
            return "Numéro d'identification unique: " + numeroUniqueIdentification + ", Nom propriétaire: " + nomProprietaire + ", Solde: " + solde + ", Découvert autorisé: " + decouvertAutorise;
        }

        public void Crediter(decimal montant)
        {
            solde = this.solde + montant;
        }

        public void Debiter(decimal montant)
        {
            if (montant <= (solde + decouvertAutorise))
            {
                solde = this.solde - montant;
            }
            else
            {
                Console.WriteLine("Débit non autorisé : solde insuffisant.");
            }
        }

        public void Transferer(CompteBancaire compteDestination, decimal montant)
        {
            if (montant <= (solde + decouvertAutorise))
            {
                Debiter(montant);
                compteDestination.Crediter(montant);
                Console.WriteLine("Transfert de " + montant + " effectué avec succès.");
            }
            else
            {
                Console.WriteLine("Transfert non autorisé : solde insuffisant.");
            }
        }

        public bool Superieur(CompteBancaire autreCompte)
        {
            return solde > autreCompte.solde;
        }
    }
}