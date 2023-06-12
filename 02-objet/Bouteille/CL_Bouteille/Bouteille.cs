using System;
using System.ComponentModel;
using System.ComponentModel.Design.Serialization;
using System.Numerics;
using System.Reflection;
using System.Reflection.Metadata.Ecma335;

namespace CL_Bouteille
{
    public class Bouteille
    {
        private string type;
        private double capaciteEnMl;
        private double contenanceEnMl;
        private bool estFerme;
        private string nom;
        private int hauteurEnCm;
        private int largeurEnMm;
        private double prixEnEuro;
        public Bouteille(string type, double contenanceEnMl, double capaciteEnMl, bool estFerme, string nom, int hauteurEnCm, int largeurEnMm, double prixEnEuro)
        {
            this.type = type;
            this.contenanceEnMl = contenanceEnMl;
            this.capaciteEnMl = capaciteEnMl;
            this.estFerme = estFerme;
            this.nom = nom;
            this.hauteurEnCm = hauteurEnCm;
            this.largeurEnMm = largeurEnMm;
            this.prixEnEuro = prixEnEuro;
        }

        public string getType()
        {
            return this.type;
        }

        public double getContenanceEnMl()
        {
            return this.contenanceEnMl;
        }

        public double getCapaciteEnMl()
        {
            return this.capaciteEnMl;
        }

        public string getNom()
        {
            return this.nom;
        }

        public int getHauteurEnCm()
        {
            return (int)this.hauteurEnCm;
        }

        public int getLargeurEnMm()
        {
            return this.largeurEnMm;
        }

        public double getPrixEnEuro()
        {
            return this.prixEnEuro;
        }

        public bool Ouvrir()
        {
            if (this.estFerme)
            {
                this.estFerme = false;
                return true;
            }
            else
            {
                return false;
            }
        }

        public bool Remplir(int pourcentage)
        {
            if (!this.estFerme)
            {
                double volumeAjoute = (pourcentage / 100.0) * this.contenanceEnMl;
                double nouvelleContenanceEnMl = this.contenanceEnMl + volumeAjoute;


                if (nouvelleContenanceEnMl > this.capaciteEnMl)
                {
                    return false;
                }
                else
                {
                    this.capaciteEnMl = nouvelleContenanceEnMl;
                    return true;
                }
            }
            else
            {
                return false;
            }
        }

        public bool Vider(int pourcentage)
        {
            if (!this.estFerme)
            {
                double volumeVide = (pourcentage / 100.0) * this.contenanceEnMl;
                double nouvelleContenanceEnMl = this.contenanceEnMl - volumeVide;


                if (nouvelleContenanceEnMl < 0)
                {
                    return false;
                }
                else
                {
                    this.contenanceEnMl = nouvelleContenanceEnMl;
                    return true;
                }
            }
            else
            {
                return false;
            }
        }
        public bool Fermer()
        {
            if (!this.estFerme)
            {
                this.estFerme = true;
                return true;
            }
            else
            {
                return false;
            }
        }



        public bool RemplirTouT()
        {
            if (!this.estFerme)
            {
                estFerme = true;
                double diference = this.capaciteEnMl - this.contenanceEnMl;
                double complet = this.contenanceEnMl + diference;
                this.contenanceEnMl = complet;
                return true;
            }
            else
            {
                return false;
            }
        }


        public bool ViderTouT()
        {
            if (!this.estFerme && this.contenanceEnMl > 0)
            {
                double bouteilleVide = this.capaciteEnMl - this.contenanceEnMl;
                this.contenanceEnMl = bouteilleVide;
                return true;
            }
            else
            {
                return false;
            }
        }

    }
}
