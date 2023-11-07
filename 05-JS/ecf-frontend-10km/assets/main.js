/* App 10000 mètres */

import { Db } from "./db.js";
import { Participant } from "./Participant.js";

const apiUrl = "./data/resultats.json"

const { createApp } = Vue;

const participantApp = {
    data() {
        return {
            participants: [],
            participantCount: 0,
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl);
        this.participants = json.map(item => {
            const [nom, prenom] = item.nom.split(" ");
            return { pays: item.pays, nom, prenom, temps: item.temps };
        });

        this.participants.sort((a,b) => a.temps - b.temps);

        this.participantCount = this.participants.length;
    },

    methods: {
        sortTable() {
            this.participants.sort((a,b) => {
                return a.temps - b.temps
            })            
        },

    }
    
};

createApp(participantApp).mount('#app');