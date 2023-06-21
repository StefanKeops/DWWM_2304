using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibraryLepi.Stades
{
    internal class Oeuf : Stade
    {
        public Oeuf()
        {

        }

        public override void SeDeplacer()
        {
            Console.WriteLine("Je ne me deplace pas");
        }

        public override Stade SeMetamorphoser()
        {
            Console.WriteLine("L'œuf se métamorphose en chenille.");
            return new Chenille();
        }
    }
}
