using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CL_Voiture
{
    public class Roue
    {
        private double dimension;
        private double vitesseEnToursParSec;

        public Roue()
        {
            this.dimension = 17;
            this.vitesseEnToursParSec = 0;
        }

        public Roue(double _dimension, double _vitesseEnToursParSec)
        {
            this.dimension = _dimension;
            this.vitesseEnToursParSec = _vitesseEnToursParSec;
        }

        public Roue(Roue roueSource)
        {
            this.dimension = roueSource.dimension;
            this.vitesseEnToursParSec = roueSource.vitesseEnToursParSec;
        }

        public bool Tourner()
        {
            if (this.vitesseEnToursParSec == 0)
            {
                this.vitesseEnToursParSec = 30;
                return true;
            }

            return false;
        }

        public bool Stopper()
        {
            if (this.vitesseEnToursParSec != 0)
            {
                this.vitesseEnToursParSec = 0;
                return true;
            }

            return false;
        }
    }
}