import { Jucator } from './Jucator.js';

const apiUrl = "./data/eRepublik.json";

const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            rows: [],  // Initialize rows property
            selectedCountry: 'all',  // Initialize selectedCountry property
            eRepublikData: null,  // Initialize eRepublikData property
            uniqueCountries: []  // Initialize uniqueCountries property
        };
    },
    methods: {
        filterByCountry() {
            if (this.selectedCountry === 'all') {
                // Afiseaza toti jucatorii daca este selectata optiunea "Toate țările"
                this.rows = this.eRepublikData.rows.map((citizenData, index) => new Jucator(citizenData, index));
            } else {
                // Filtrare dupa tara selectata
                this.rows = this.eRepublikData.rows
                    .filter(citizenData => citizenData.tara === this.selectedCountry)
                    .map((citizenData, index) => new Jucator(citizenData, index));
            }
        },

        generateProfileLink(citizenId) {
            return `https://www.erepublik.com/en/citizen/profile/${citizenId}`;
        }
    },
    mounted() {
        fetch(apiUrl)
            .then(response => response.json())
            .then(eRepublikData => {
                if (eRepublikData && eRepublikData.rows) {
                    // Make eRepublikData a property of the Vue instance
                    this.eRepublikData = eRepublikData;
                    this.rows = eRepublikData.rows.map((citizenData, index) => new Jucator(citizenData, index));

                    // Obține țările unice și sortez după "Toate țările"
                    const uniqueCountries = Jucator.getUniqueCountries(this.rows).sort();
                    const indexOfAllCountries = uniqueCountries.indexOf('all');
                    if (indexOfAllCountries !== -1) {
                        uniqueCountries.splice(indexOfAllCountries, 1);
                        uniqueCountries.unshift('all');
                    }

                    this.uniqueCountries = uniqueCountries;
                } else {
                    console.error('Invalid data format:', eRepublikData);
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }
});

app.mount('#app');
