using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography.X509Certificates;
using System.Text;
using System.Threading.Tasks;

namespace LepidoptereBibliotheque.Stades
{
    internal class Oeuf : Stade
    {
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
