/* Football APP */ 

import { Db } from "./Db.js";
import { Match } from "./Match.js";

const apiUrl = "tournoi/football.json"

const { createApp } = Vue;

const appFootball = {
    data() {
        return {
            matchs: [],
            equipeCount: 0,
            matchsCount: 0,
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl);

        for (let item of json) {
            let c = new Match(item);

            this.matchs.push(c);
        }

        this.matchsCount = this.matchs.length;
    },
    computed: {
        async uniqueEquipes() {
            return [...new Set(this.original)] 
    },
    methods: {
        async loadData() {
            this.originalMatch = [...this.matchs];

            this.gagnant1 = json.map(item => {
                const [hote1, visiteur1] = item.score[0].split("-");
                return { 
                    hote1,
                    visiteur1
                }
            })
        },

        gagnant1(hote1, visiteur1) {
            
            if(hote1 > visiteur1) {
                return team1;
            }
            else if (hote1 < visiteur1) {
                return this.team2;
            }
            else {
                return "éqalité"
            }
        },

        gagnant2(hote2, visiteur2) {
            
            if(hote2 > visiteur2) {
                return team1;
            }
            else if (hote2 < visiteur2) {
                return this.team2;
            }
            else {
                return "éqalité"
            }
        }
       
        }
    }
}

createApp(appFootball).mount('#appFootball');