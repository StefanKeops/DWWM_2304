using CL_Voiture.Components;

namespace CL_Voiture
{
    public class Voiture
    {
        private Moteur aMoteur;
        private Roue[] desRoues;
        private string aMarque;

        public Voiture()
        {
            aMoteur = new Moteur();
            desRoues = new Roue[4];

            for (int i = 0; i < 4; i++)
            {
                desRoues[i] = new Roue();
            }
        }

        public Voiture(Moteur aMoteur, Roue[] desRoues, string aMarque)
        {
            this.aMoteur = aMoteur;
            this.desRoues = desRoues;
            this.aMarque = aMarque;
            for (int i = 0; i < 4; i++)
            {
                desRoues[i] = new Roue();
            }
        }

        public bool Demarer()
        {
            return this.aMoteur.Demarer();
        }

        public bool Avancer()
        {
            List<Roue> rouesABouger = new List<Roue> { this.desRoues[0], this.desRoues[1] };
            return this.aMoteur.EntrainerRoues(rouesABouger);
        }

        public bool Freiner()
        {
            List<Roue> rouesAFreiner = new List<Roue> { this.desRoues[0], this.desRoues[1] };
            return this.aMoteur.FreinerRoues(rouesAFreiner);
        }
    }
}