using CL_Voiture;

namespace ConsoleAppVoiture
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Voiture dacia = new Voiture();

            dacia.Avancer();
            dacia.Freiner();
            dacia.Demarer();
            dacia.Avancer();
            dacia.Freiner();
        }
    }
}