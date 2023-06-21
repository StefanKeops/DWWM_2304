using System;

namespace ClassLibraryLepi.Stades
{
    internal class Papillon : Stade
    {
        public override void SeDeplacer()
        {
            Console.WriteLine("attends que je batte des ailes");
        }

        public override Stade SeMetamorphoser()
        {
            Console.WriteLine("Le papillon ne peut pas se métamorphoser davantage.");
            return new Papillon();
        }
    }
}
