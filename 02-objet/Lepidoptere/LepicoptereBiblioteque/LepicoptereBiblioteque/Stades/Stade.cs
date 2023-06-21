using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LepidoptereBibliotheque.Stades
{
    internal abstract class Stade
    {
        public abstract void SeDeplacer();

        public abstract Stade SeMetamorphoser();
    }
}