using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CL_Voiture
{
    public class Roue
    {
        private double dimensionPneuEnPouces;
        private double vitesseEnDegParS;

        public Roue()
        {
            this.dimensionPneuEnPouces = 16;
            this.vitesseEnDegParS = 0;
        }

        public Roue(double _dimensionPneuEnPouces, double _vitesseEnDegParS)
        {
            this.dimensionPneuEnPouces = _dimensionPneuEnPouces;
            this.vitesseEnDegParS = _vitesseEnDegParS;
        }

        public Roue(Roue roueSource)
        {
            this.dimensionPneuEnPouces = roueSource.dimensionPneuEnPouces;
            this.vitesseEnDegParS = roueSource.vitesseEnDegParS;
        }

        public bool Tourner()
        {
            if (this.vitesseEnDegParS == 0)
            {
                this.vitesseEnDegParS = 10;
                return true;
            }

            return false;
        }

        public bool Stopper()
        {
            if (this.vitesseEnDegParS != 0)
            {
                this.vitesseEnDegParS = 0;
                return true;
            }

            return false;
        }
    }
}