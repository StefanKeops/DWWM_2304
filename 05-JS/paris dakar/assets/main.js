import { Db } from "./db.js";
import { Participant } from "./Participant.js";

const apiUrl = "./data/clasament.json"

const { createApp } = Vue;

const participantApp = {
    data() {
        return {
            participants: [],
            participantCount: 0,
            selectedCountries: [],
            originalParticipants: [],
            bestParticipant: null,
        };
    },
    async mounted() {
        await this.loadData();
        this.participantCount = this.participants.length;
        this.calculateBestTime(); //
    },

    methods: {
        async loadData() {
            let json = await Db.fetchJson(apiUrl);
            this.participants = json.map(item => {
                const [nom, prenom] = item.nom.split(" ");
                return {
                    pays: item.pays,
                    numero: item.numero,
                    nom,
                    prenom,
                    equipe: item.team,
                    tempsFinal: this.calculateTemps(item.temp)
                };
            });

            this.originalParticipants = [...this.participants];
        },

        calculateTemps(temp) {
            const hours = Math.floor(temp / 3600);
            const minutes = Math.floor((temp % 3600) / 60);
            const seconds = temp % 60;

            return {
                hours,
                minutes,
                seconds,
                formatted: `${hours}h ${minutes}m ${seconds}s`
            };
        },

        sortTable() {
            this.participants.sort((a, b) => a.tempsFinal - b.tempsFinal);
        },

        async filterByCountries() {
            await this.loadData();

            this.uniqueCountries.sort();

            if (this.selectedCountries.length === 0) {
                this.participants = [...this.originalParticipants];
            } else {
                this.participants = this.originalParticipants
                    .filter(participant => this.selectedCountries.includes(participant.pays));
            }
            this.participantCount = this.participants.length;
        },

        calculateBestTime() {
            if (this.participants.length === 0) {
                this.bestParticipant = null;
                return;
            }

            const sortedParticipants = [...this.participants].sort((a, b) => a.tempsFinal - b.tempsFinal);

            if (sortedParticipants.length > 0) {
                this.bestParticipant = sortedParticipants[0];
            } else {
                this.bestParticipant = null;
            }
        },
    },

    computed: {
        uniqueCountries() {
            return [...new Set(this.originalParticipants.map(participant => participant.pays))];
        },
        filteredParticipants() {
            if (this.selectedCountries.length === 0) {
                return this.participants;
            } else {
                return this.participants.filter(participant => this.selectedCountries.includes(participant.pays));
            }
        },
    },
}

createApp(participantApp).mount('#app');
