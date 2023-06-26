using System; 
using System.Drawing;

namespace CL_Points
{
    public class Points
    {
        private float x;
        private float y;

        public Points()
        {
            this.x = 0;
            this.y = 0;
        }

        public Points(float x, float y)
        {
            this.x = x;
            this.y = y;
        }

        public override string ToString()
        {
            return "Les coordonnées du point sont: x - " + x + " y - " + y;
        }

        public string GetPosition()
        {
            return $"({x},{y})";
        }

        public void Deplacer(float x2, float y2)
        {
            x += x2;
            y += y2;
        }

        public Points PointSymetriqueAxeAbscisses()
        {
            return new Points(x, -y);
        }

        public Points PointSymetriqueAxeOrdonnees()
        {
            return new Points(-x, y);
        }

        public Points PointSymetriqueOrigine()
        {
            Points x3 = PointSymetriqueAxeAbscisses();
            Points y3 = x3.PointSymetriqueAxeOrdonnees();
            return y3;
        }

       //  public Points PointSymetriqueOrigine()
       // {
       //    utiliser PointSymetriqueAxeAbscisses et PointSymetriqueAxeOrdonnees
       //    return new Points(-x, -y);
       // }

        public void PermuterCoordonees()
        {
            float z = x;
            x = y;
            y = z;

        }
        
        
    }
}