import { Db } from "./db.js";
import { Etudiant } from "./etudiant.js";

const apiUrl = "./eval.json"

const { createApp } = Vue;

const etudiantsApp = {
    data() {
        return {
            etudiants: [],
            etudiantCount: 0,
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl);
        this.etudiants = json.map(item => {
            const [nom, prenom] = item.fullname.split(" ");
            return { nom, prenom, grade: item.grade };
        });

        this.etudiantCount = this.etudiants.length;

        this.sortTable();

        const totalNotes = this.etudiants.reduce((total, etudiant) => total + etudiant.grade, 0);
        this.moyenneClasse = (totalNotes / this.etudiants.length).toFixed(2);
    },
    methods: {
        sortTable() {
            this.etudiants.sort((a, b) => {
                return b.grade - a.grade;
              });
        },

        countEtudiantsAuDessusMoyenne() {
            const auDessusMoyenne = this.etudiants.filter(etudiant => etudiant.grade < this.moyenneClasse);
            return auDessusMoyenne.length;
        }
    },

};

createApp(etudiantsApp).mount('#app');