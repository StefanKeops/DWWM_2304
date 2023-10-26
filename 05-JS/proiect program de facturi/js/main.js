import { Db } from "./db.js";
import { Produit } from "./produit.js";

const apiUrl = "js/batiment.json"


const { createApp } = Vue;

const produitsApp = {
    data() {
      return {
        produits: [],
        sortBy: 'asc',
      };
    },
    async mounted() {
      let json = await Db.fetchJson(apiUrl);
      for (let item of json.data) {
        let c = new Produit(item);
        this.produits.push(c);
      }
    }
};
  
  createApp(produitsApp).mount('#app');

  
 