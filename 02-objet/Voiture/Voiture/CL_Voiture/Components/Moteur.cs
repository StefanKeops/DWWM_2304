using System;
using System.Collections.Generic;

namespace CL_Voiture.Components
{
    public class Moteur
    {
        private bool enMarche;

        public Moteur()
        {
            this.enMarche = false;
        }

        public Moteur(bool _enMarche)
        {
            this.enMarche = _enMarche;
        }

        public Moteur(Moteur moteurInitial)
        {
            this.enMarche = moteurInitial.enMarche;
        }

        public bool Demarer()
        {
            if (!this.enMarche)
            {
                this.enMarche = true;
                return true;
            }

            return false;
        }

        public bool Eteindre()
        {
            if (this.enMarche)
            {
                this.enMarche = false;
                return true;
            }

            return false;
        }

        public bool EntrainerRoues(List<Roue> rouesABouger)
        {
            if (this.enMarche)
            {
                bool toutesRouesEnMouvement = true;

                foreach (Roue roue in rouesABouger)
                {
                    if (!roue.Tourner())
                    {
                        toutesRouesEnMouvement = false;
                    }
                }

                return toutesRouesEnMouvement;
            }

            return false;
        }

        public bool FreinerRoues(List<Roue> rouesAStoper)
        {
            if (this.enMarche)
            {
                bool toutesRouesStoppees = true;

                foreach (Roue roue in rouesAStoper)
                {
                    if (!roue.Stopper())
                    {
                        toutesRouesStoppees = false;
                    }
                }

                return toutesRouesStoppees;
            }

            return false;
        }
    }
}
