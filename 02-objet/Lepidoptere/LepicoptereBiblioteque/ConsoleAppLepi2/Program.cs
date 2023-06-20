using LepidoptereBibliotheque;

namespace ConsoleAppLepi2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Lepidoptere lepi = new Lepidoptere();
            lepi.SeDeplacer();
            lepi.SeMetamorphoser();
        }
    }
}