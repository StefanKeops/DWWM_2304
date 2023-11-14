import { Db } from "./Db.js";
import { Match } from "./Match.js";

const apiUrl = "./data/championsLeague2023.json"

const { createApp } = Vue;

const matchApp = {
    data() {
        return {
            matchs: [],
            originalMatchs: [],
        };
    },

    async mouted() {
        await this.loadData();
    },

    methods: {
        async loadData() {
            let json = await Db.fetchJson(apiUrl);
            this.matchs = json.map(item => {
                return {
                    matchNumber: item.MatchNumber,
                    roundNumber: item.RoundNumber,
                    date: item.DateUtc,
                    location: item.Location,
                    homeTeam: item.HomeTeam,
                    awayTeam: item.AwayTeam,
                    group: item.Group,
                    homeTeamScore: item.HomeTeamScore,
                    awayTeamScore: item.AwayTeamScore,
                    difference: this.calculateDifference(item.HomeTeamScore, item.AwayTeamScore)
                };
            });

            this.originalMatchs = [...this.matchs];
        },

        calculateDifference(homeTeamScore, awayTeamScore) {
            homeTeamScore = this.HomeTeamScore;
            awayTeamScore = this.AwayTeamSc;
   
           if (homeTeamScore > awayTeamScore) {
               let difference = homeTeamScore - awayTeamScore;
               return difference;
           }
           else if (awayTeamScore > homeTeamScore) {
               let difference = awayTeamScore - homeTeamScore;
               return difference;
           }
           else {
               return 0;
           }
       }
    }
}
createApp(matchApp).mount('#app');