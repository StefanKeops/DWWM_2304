import { Db } from "./Db.js";
import { Legume } from "./Legumes.js";

const apiUrl = "data/legumos.json"

const { createApp } = Vue;

const appVente = {
    data() {
        return {
            boxes: ['VENTES', 'NOUVELLE VENTE', 'LEGUMES', 'NOUVEAU LEGUME'],
        };
    },
};

createApp(appVente).mount('#appVente');