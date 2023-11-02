import { Db } from "./db.js";
import { Produit } from "./produit.js";

const apiUrl = "js/batiment.json"


const { createApp } = Vue;

const produitsApp = {
  data() {
    return {
      produits: [],
      sortBy: 'asc',
      nouveauProduit: { description: '', unite: '', prix: 0 }
    };
  },
  async mounted() {
    let json = await Db.fetchJson(apiUrl);
    for (let item of json.data) {
      let c = new Produit(item);
      this.produits.push(c);
    }
  },
  methods: {
    toggleSort() {
      this.sortBy = this.sortBy === 'asc' ? 'desc' : 'asc';
      this.produits.sort((a, b) => {
        return this.sortBy === 'asc' ? a.description.localeCompare(b.description) : b.description.localeCompare(a.description);
      });
    },

    ajouterLigne(nouveauProduit) {
      const dernierId = this.produits.length > 0 ?
        Math.max(...this.produits.map(prod => prod.id)) : 0;
      const produit = new Produit({
        id: dernierId + 1,
        description: nouveauProduit.description,
        unite: nouveauProduit.unite,
        prix: nouveauProduit.prix
      })

      this.produits.push(produit);

    },

    submitForm(event) {
      event.preventDefault(); /* nu se trimite implicit formularul*/
      this.ajouterLigne(this.nouveauProduit); /* adauga noul produs*/
      this.nouveauProduit = { description: '', unite: '', prix: 0 } /* reinitializeaza formularul */
    },

    main() {
      window.location.href = "f001.html"
    },
    facture() {
      window.location.href = "facture.html";
    },
    factureTVA() {
      window.location.href = "factureTVA.html";
    },
    liste1() {
      window.location.href = "liste_factures.html";
    },
    devis() {
      window.location.href = "devis.html";
    },
    devisTVA() {
      window.location.href = "devisTVA.html";
    },
    liste2() {
      window.location.href = "liste_devises.html";
    },
  }
}


createApp(produitsApp).mount('#app');  