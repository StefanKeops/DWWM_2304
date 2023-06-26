using System;

namespace CL_CompteBancaire
{
    public class CompteBancaire
    {
        private decimal decouvertAutorise;// valeur positive
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

        public CompteBancaire(int numeroUniqueIdentification, string nomProprietaire, decimal solde, decimal decouvertAutorise)
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

        public bool Debiter(decimal montant)
        {
            if (montant <= (solde + decouvertAutorise))
            {
                solde = this.solde - montant;
                return true;
            }
            else
            {
                return false;
                //Console.WriteLine("Débit non autorisé : solde insuffisant.");
            }
        }

        public bool Transferer(CompteBancaire compteDestination, decimal montant)
        {
            if (Debiter(montant))
            {
                
                compteDestination.Crediter(montant);
                return true;
                //Console.WriteLine("Transfert de " + montant + " effectué avec succès.");
            }
            else
            {
                return false;
                //Console.WriteLine("Transfert non autorisé : solde insuffisant.");
            }
        }

        public bool Superieur(CompteBancaire autreCompte)
        {
            return solde > autreCompte.solde;
        }
    }
}