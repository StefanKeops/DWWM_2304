import { Db } from "./Db.js";
import { Cereal } from "./Cereal.js";

const apiUrl = "./data/cereals.json"

const { createApp } = Vue;

const cerealApp = {
    data() {
        return {
            cerealSource: [],
            cereals: [],
            caloriesColumn: [],
            checked: [],
            categories: '',
            searchCereals: '',
            asc: true
        }
    },
    async mounted() {
        this.cereals = await Db.fetchJson(apiUrl);
        this.cereals = this.cereals.data;
        this.cereals = this.cereals.map(cereal => new Cereal(cereal));
    },

    methods: {
        trier(column) {
            this.cereals.sort((a, b) => {
                if (this.asc) {
                    return a[column] - b[column];
                } else {
                    return b[column] - a[column];
                }
            });
        },

        sortCol(event) {
            const column = event.target.id;
                  this.trier(column);
        },

    }
}

createApp(cerealApp).mount('#app');

