using System.Reflection.PortableExecutable;

namespace CL_Fraction
{
    public class Fraction
    {
        private int denominateur;
        private int numerateur;

        public Fraction()
        {
            this.denominateur = 0;
            this.numerateur = 0;
        }

        public Fraction(int numerateur, int denominateur)
        {
            this.denominateur = denominateur;
            this.numerateur = numerateur;
        }   

        public Fraction(int numerateur)
        {
            this.denominateur = 1;
            this.numerateur = numerateur;
        }

        public string ToString()
        {
            return $"{numerateur}/{denominateur}";
        }

        public void Oppose()
        {
            numerateur = -numerateur;
        }

        public void Inverse()
        {
            int temp = numerateur;
            numerateur = denominateur;
            denominateur = temp;
        }

        private double CalculValeur()
        {
            return (double)numerateur / denominateur;
        }

        public bool SuperieurA(Fraction fraction2)
        {
            double valeur = CalculValeur();
            double valeur2 = fraction2.CalculValeur();
            return valeur > valeur2;
        }

        public bool EgalA(Fraction fraction2)
        {
            double valeur = CalculValeur();
            double valeur2 = fraction2.CalculValeur();
            return valeur == valeur2;
        }

        private int GetPgcd()
        {
            int a = this.numerateur;
            int b = this.denominateur;
            int pgcd = 1;

            if (a != 0 && b != 0)
            {
                if (a < 0)
                {
                    a = -a;
                }
                if (b < 0)
                {
                    b = -b;
                }
                while (a != b)
                {
                    if (a < b)
                    {
                        b = b - a;
                    }
                    else
                    {
                        a = a- b;
                    }
                }
                pgcd = a;
            }
            return pgcd;
        }

        private void Reduire()
        {
            int pgcd = GetPgcd();
            numerateur /= pgcd;
            denominateur /= pgcd;

            if (denominateur < 0)
            {
                numerateur = -numerateur;
                denominateur = -denominateur;
            }
        }

        private float GetValue()
        {
           
        }

        public string ToDisplay()
        {
            GetValue();
            Console.WriteLine(ToString());
        }
    }
}