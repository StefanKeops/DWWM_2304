namespace Exo_5_1_Calcul_nombres_parfaits
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int compteur = 0;
            int nombre = 2;
            
            while (compteur < 4)
            {
                int sommeDiviseurs = 1; // 1 est le diviseur de toutes les nombres

                for (int i = 2; i < nombre; i++)
                {
                    if (nombre % i == 0)
                    {
                        sommeDiviseurs += i;
                    }
                }

                if (sommeDiviseurs == nombre)
                {
                    Console.WriteLine(nombre);
                    compteur++;
                }

                nombre++;
            }

        }
    }
}