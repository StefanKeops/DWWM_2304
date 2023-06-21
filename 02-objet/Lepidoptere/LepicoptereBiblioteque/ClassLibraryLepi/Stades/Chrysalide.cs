using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace ClassLibraryLepi.Stades
{
    internal class Chrysalide : Stade
    {
        public Chrysalide()
        {

        }

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
