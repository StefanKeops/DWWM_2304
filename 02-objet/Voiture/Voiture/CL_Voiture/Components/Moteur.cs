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

        public Moteur(Moteur moteurSource)
        {
            this.enMarche = moteurSource.enMarche;
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

        public bool EntrainerRoues(List<Roue> rouesAEntrainer)
        {
            if (this.enMarche)
            {
                bool toutesRouesEntrainees = true;

                foreach (Roue roue in rouesAEntrainer)
                {
                    if (!roue.Tourner())
                    {
                        toutesRouesEntrainees = false;
                    }
                }

                return toutesRouesEntrainees;
            }

            return false;
        }

        public bool ArreterRoues(List<Roue> rouesAArreter)
        {
            if (this.enMarche)
            {
                bool toutesRouesStoppees = true;

                foreach (Roue roue in rouesAArreter)
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
