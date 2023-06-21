using LepidoptereBibliotheque.Stades;

namespace LepidoptereBibliotheque
{
    public class Lepidoptere
    {

        private Stade stadeCourant;

        public Lepidoptere()
        {
            this.stadeCourant = new Oeuf();
        }

        public void SeDeplacer()
        {
            this.stadeCourant.SeDeplacer();
        }

        public void SeMetamorphoser()
        {
            this.stadeCourant = this.stadeCourant.SeMetamorphoser();
        }
    }
}