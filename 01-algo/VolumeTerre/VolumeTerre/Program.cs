namespace VolumeTerre
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double rayon;
            string reponse;

            Console.WriteLine("Veuillez saisir le rayon d'une sphère (La Terre)");

            reponse = Console.ReadLine();
            rayon = double.Parse(reponse);

            double aire = 4 * Math.PI * Math.Pow(rayon, 2);

            double volume = ( 4 * Math.PI * Math.Pow(rayon, 3) ) / 3;

            Console.WriteLine("L'aire de la Terre est: {0:#,###.###} et son volume sera: {1:#,###.###}", aire, volume); 
        }
    }
}