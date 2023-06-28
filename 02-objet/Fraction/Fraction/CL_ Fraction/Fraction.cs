using System.Reflection.PortableExecutable;

namespace CL_Fraction
{
    public class Fraction
    {
        private int denominateur;
        private int numerateur;

        public Fraction():this(0,0)
        {
        }

        public Fraction(int numerateur, int denominateur)
        {
            if (denominateur != 0)
            {
                this.denominateur = denominateur;
                this.numerateur = numerateur;
            }
            else
            {
                Console.WriteLine("denominateur est 0 -  error fraction");
            }
        }   

        public Fraction(int numerateur)
        {
            this.denominateur = 1;
            this.numerateur = numerateur;
        }

        public Fraction(Fraction fractionACloner)
        {
            this.denominateur = fractionACloner.denominateur;
            this.numerateur= fractionACloner.numerateur;
        }

        public override string ToString()
        {
            return $"{numerateur}/{denominateur}";
        }

        public void Oppose()
        {
            numerateur = -numerateur;
        }

        public void Inverse()
        {
            (denominateur, numerateur) = (numerateur, denominateur);
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
                        b -= a;
                    }
                    else
                    {
                        a -= b;
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

        public string ToDisplay()
        {
            return $"{numerateur}/{denominateur} = {CalculValeur()}";
        }

        public Fraction Plus(Fraction fraction2)
        {
            int newDenominator = denominateur * fraction2.denominateur;
            int newNumerator = (numerateur * fraction2.denominateur) + (denominateur * fraction2.numerateur);
            Reduire();

            return new Fraction(newNumerator, newDenominator);
        }

        public Fraction Moins(Fraction fraction2)
        {
            int newDenominator = denominateur * fraction2.denominateur;
            int newNumerator = (numerateur * fraction2.denominateur) - (denominateur * fraction2.numerateur);
            Reduire();

            return new Fraction(newNumerator, newDenominator);
        }

        public Fraction Multiplie(Fraction fraction2)
        {
            int newDenominator = denominateur * fraction2.denominateur;
            int newNumerator = numerateur * fraction2.numerateur;
            Reduire();

            return new Fraction(newNumerator, newDenominator);
        }

        public Fraction Divise(Fraction fraction2)
        {
            Fraction fractionClone = new (fraction2);
            fractionClone.Inverse();
            Reduire();
            return Multiplie(fractionClone);
        }

        public static Fraction operator +(Fraction fraction, Fraction fraction2)
        {
            return fraction.Plus(fraction2);
        }

        public static Fraction operator -(Fraction fraction, Fraction fraction2)
        {
            return fraction.Moins(fraction2);
        }

        public static Fraction operator *(Fraction fraction, Fraction fraction2)
        {
            return fraction.Multiplie(fraction2);
        }

        public static Fraction operator /(Fraction fraction, Fraction fraction2)
        {
            return fraction.Divise(fraction2);
        }
    }
}