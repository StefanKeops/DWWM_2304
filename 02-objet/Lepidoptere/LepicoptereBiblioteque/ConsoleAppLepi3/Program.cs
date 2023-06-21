using ClassLibraryLepi;


namespace ConsoleAppLepi3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Lepidoptere lepi = new Lepidoptere();
            lepi.SeDeplacer();
            lepi.SeMetamorphoser();
            lepi.SeDeplacer();
            lepi.SeMetamorphoser();
            lepi.SeDeplacer();
            lepi.SeMetamorphoser();
            lepi.SeDeplacer();
            lepi.SeMetamorphoser();
            lepi.SeDeplacer();
            lepi.SeMetamorphoser();

            Console.WriteLine("le plaisir de l'évolution");
        }
    }
}