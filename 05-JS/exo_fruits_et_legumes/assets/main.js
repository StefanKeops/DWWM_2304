import { Db } from "./Db.js";
import { Legume } from "./Legumes.js";

const apiUrl = "data/legumos.json"

const { createApp } = Vue;

const app = {
    data() {
        return {
            boxes: ['VENTES', 'NOUVELLE VENTE', 'LEGUMES', 'NOUVEAU LEGUME'],
            legumes: [],
            sortColumn: '',
            sortOrder: 'asc',
        };
    },

    methods: {
        sortBy(column) {
            if (this.sortColumn === column) {
                this.sortOrder = this.sortOrder === 'asc' ? 'desc' : 'asc';
            } else {
                this.sortColumn = column;
                this.sortOrder = 'asc';
            }

            this.sortLegumes();
        },

        sortLegumes() {
            this.legumes.sort((a, b) => {
                const order = this.sortOrder === 'asc' ? 1 : -1;
                return a[this.sortColumn] > b[this.sortColumn] ? order : -order;
            });
        },

        editLegume(legume) {
            console.log('Edit legume:', legume);
        },

        deleteLegume(legume) {
            const confirmDelete = confirm('Are you sure you want to delete this legume?');
            if (confirmDelete) {
                const index = this.legumes.indexOf(legume);
                this.legumes.splice(index, 1);
            }
        },
    },

    async mounted() {
        let json = await Db.fetchJson(apiUrl);

        for (let item of json) {
            let c = new Legume(item);

            this.legumes.push(c);
        }

        this.sortColumn = 'Name';
        this.sortLegumes();
    },

};

createApp(app).mount('#app');