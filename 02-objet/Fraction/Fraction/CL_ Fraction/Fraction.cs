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

        public Fraction(int denominateur, int numerateur)
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

        public bool SuperieurA(Fraction fraction2)
        {
            double valeurActulle = (double)numerateur / denominateur;
            double valeurAutre = (double)fraction2.numerateur / fraction2.denominateur;
            return valeurActulle > valeurAutre;
        }

        public bool EgalA(Fraction fraction2)
        {
            double valeurActulle = (double)numerateur / denominateur;
            double valeurAutre = (double)fraction2.numerateur / fraction2.denominateur;
            return valeurActulle == valeurAutre;
        }
    }
}