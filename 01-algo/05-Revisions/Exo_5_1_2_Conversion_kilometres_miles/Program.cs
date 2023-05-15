namespace Exo_5_2_2_Conversion_kilometres_miles
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double valeur;
            string saisie;
            bool valeurAccepte;

            do
            {
                Console.WriteLine("Entrez une valeur à convertir (avec unité de mesure km ou mi) ou 'q' pour quitter :");

                saisie = Console.ReadLine();

                if(saisie.EndsWith("km"))
                {
                    if(double.TryParse(saisie.Replace("km", "").Trim(), out valeur))
                    {
                        if(valeur < 0.01 || valeur > 1000000)
                        {
                            valeurAccepte = false;
                            Console.WriteLine("La valeur doit être comprise entre 0.01 et 1 000 000 km.");
                        }
                        else
                        {
                            double miles = valeur / 1.609;
                            Console.WriteLine("{0} km = {1:F2} mi", valeur, miles);
                            valeurAccepte = true;
                        }
                    }
                    else
                    {
                        valeurAccepte = false;
                        Console.WriteLine("La valeur saisie n'est pas valide.");
                    }
                }
                else if(saisie.EndsWith("mi"))
                {
                    if(double.TryParse(saisie.Replace("mi", "").Trim(), out valeur))
                    {
                        if(valeur < 0.01 || valeur > 1000000)
                        {
                            valeurAccepte = false;
                            Console.WriteLine("La valeur doit être comprise entre 0.01 et 1 000 000 mi.");
                        }
                        else
                        {
                            double kilometres = valeur * 1.609;
                            Console.WriteLine("{0} mi = {1:F2} km", valeur, kilometres);
                            valeurAccepte = true;
                        }
                    }
                    else
                    {
                        valeurAccepte = false;
                        Console.WriteLine("La valeur saisie n'est pas valide.");
                    }
                }
                else if(saisie == "q")
                {
                    valeurAccepte = true;
                }
                else
                {
                    if(double.TryParse(saisie, out valeur))
                    {
                        if (double.TryParse(saisie.Replace("km", "").Trim(), out valeur))
                        {
                            if (valeur < 0.01 || valeur > 1000000)
                            {
                                valeurAccepte = false;
                                Console.WriteLine("La valeur doit être comprise entre 0.01 et 1 000 000 km.");
                            }
                            else
                            {
                                double miles = valeur / 1.609;
                                Console.WriteLine("{0} km = {1:F2} mi", valeur, miles);
                                valeurAccepte = true;
                            }
                        }
                        else
                        {
                            valeurAccepte = false;
                            Console.WriteLine("La valeur saisie n'est pas valide.");
                        }
                    }
                }
            }
            while (valeurAccepte = false);
        }
    }
}