using System.Security.Cryptography;

namespace Exo_4_4_Tri_d_un_tableau
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int[] exemple = new int[] { 128, 64, 8, 512, 16, 32, 256 };

            Console.WriteLine("exemple avant le tri: \n");

            foreach (int value in exemple)
            {
                Console.WriteLine(value + " ");
            }

            int j = 0;

            for (int i = j; i < exemple.Length; i++)
            {
                if (exemple[i] < exemple[j])
                {
                    j = i;
                }   
            }

            int tmp = exemple[0];
            exemple[0] = exemple[j];
            exemple[j] = tmp;

            Console.WriteLine("exemple apres la permutation: \n");

            foreach (int value in exemple)
            {
                Console.WriteLine(value + " ");
            }

            int indexMin;

            int i2 = 1;
            indexMin = 1;

                for (j = i2 + 1; j < exemple.Length; j++)
                {

                    if (exemple[j]  < exemple[indexMin])
                    {
                        indexMin = j;
                    }
                }
            
                int tmp2 = exemple[i2];
                exemple[i2] = exemple[indexMin];
                exemple[indexMin] = tmp2;
         
            Console.WriteLine("exemple apres la deuxieme permutation: \n");

            foreach (int value in exemple)
            {
                Console.WriteLine(value + " ");
            }

            for (int i3 = 0; i3 < exemple.Length; i3++)
            {
                int indexMin2 = i3;

                for (int j2 = i3 + 1; j2 < exemple.Length; j2++)
                {
                    if (exemple[j2] < exemple[indexMin2])
                    {
                        indexMin2 = j2;
                    }
                }

                int tmp3 = exemple[i3];
                exemple[i3] = exemple[indexMin2];
                exemple[indexMin2] = tmp3;
            }

            Console.WriteLine("exemple final: \n");

            foreach (int value in exemple)
            {
                 Console.WriteLine(value + " ");
            }
        }

    }
}