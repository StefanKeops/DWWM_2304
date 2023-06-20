using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LepidoptereBibliotheque.Stades
{
    internal class Chrysalide : Stade
    {
        public override void SeDeplacer()
        {
            Console.WriteLine("Je ne me deplace pas");
        }

        public override Stade SeMetamorphoser()
        {
            Console.WriteLine("La Chrysalide se métamorphose en Papillon");
            return new Papillon();
        }
    }
}
