using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace LepidoptereBibliotheque.Stades
{
    internal class Chenille : Stade
    {
        public Chenille()
        {

        }

        public override void SeDeplacer()
        {
            Console.WriteLine("Attends, laisse-moi secouer mes jambes");
        }

        public override Stade SeMetamorphoser()
        {
            Console.WriteLine("La Chenille se métamorphose en Chrysalide");
            return new Chrysalide();
        }
    }
}
