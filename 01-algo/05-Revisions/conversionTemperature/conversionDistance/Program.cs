namespace conversionDistance
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double x;
            string saisie;
            bool valeurAccepte = false;

            do
            {
                Console.WriteLine("Entrez une valeur entre 0.01 à 1 000 000 à convertir suivi de l'unité de distance: - km pour kilometres, mi - pour miles (la valeure et l'unité de distance sontt séparés par un espace (exemple 500 km pour 500 kilometres)");
                saisie = Console.ReadLine().ToLower();

                if (double.TryParse(saisie, out x) == true)
                {
                    if (x < 0.01 || x > 1000000)
                    {
                        valeurAccepte = false;
                        Console.WriteLine("La valeur doit être compris entre 0.01 et 1 000 000 km");
                    }
                    else
                    {
                        double miles = x / 1.609;
                        Console.WriteLine("{0:#.##} km = {1:#.##} mi", x, miles);
                        valeurAccepte = true;
                    }
                }
                else
                {
                    if (saisie.EndsWith("km"))
                    {
                        if (double.TryParse(saisie.Replace(" km", String.Empty).Trim(), out x))
                        {
                            if (x < 0.01 || x > 1000000)
                            {
                                valeurAccepte = false;
                                Console.WriteLine("La valeur doit être compris entre 0.01 et 1 000 000 km");
                            }
                            else
                            {
                                double miles = x / 1.609;
                                Console.WriteLine("{0:#.##} km = {1:#.##} mi", x, miles);
                                valeurAccepte = true;
                            }
                        }
                        else
                        {
                            valeurAccepte = false;
                            Console.WriteLine("La valeur saisie n'est pas un nombre valide veuillez recommencer.");
                        }
                    }
                    else if (saisie.EndsWith("mi"))
                    {
                        if (double.TryParse(saisie.Replace(" mi", String.Empty).Trim(), out x))
                        {
                            if (x < 0.01 || x > 1000000)
                            {
                                valeurAccepte = false;
                                Console.WriteLine("La valeur doit être compris entre 0.01 et 1 000 000 km");
                            }
                            else
                            {
                                double kilometres = x * 1.609;
                                // Console.WriteLine( x + " miles = " + kilometres + " km");
                                Console.WriteLine("{0:#.##} mi = {1:#.##} km", x, kilometres);
                                valeurAccepte = true;
                            }
                        }
                        else
                        {
                            valeurAccepte = false;
                            Console.WriteLine("L'unité de distance n'a pas été indiquée ou est incorrecte.");
                        }
                    }
                    else
                    {
                        if (saisie.Substring(saisie.Length - 1, 1).Equals("q"))
                        {
                            valeurAccepte = true;
                        }
                    }
                }
            }
            while (valeurAccepte == false);
        }
    }
}