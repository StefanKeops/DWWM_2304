import { Db } from "./db.js";
import { Etudiant } from "./etudiant.js";

const apiUrl = "./eval.json"

const { createApp } = Vue;

const etudiantsApp = {
    data() {
        return {
            etudiants: [],
            nouveauEtudiant: {
                fullname: '',
                grade: 0,
            },
            etudiantCount: 0,
            noteEliminatoare: 12,
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl);
        this.etudiants = json.map(item => {
            const [nom, prenom] = item.fullname.split(" ");
            return { nom, prenom, grade: item.grade };
        });

        console.log(this.etudiants)

        this.etudiantCount = this.etudiants.length;

        const totalNotes = this.etudiants.reduce((total, etudiant) => total + etudiant.grade, 0);
        this.moyenneClasse = (totalNotes / this.etudiants.length).toFixed(2);
    },
    methods: {

        ajouterEtudiant() {
            if (this.nouveauEtudiant.fullname && this.nouveauEtudiant.grade) {
                this.etudiants.push({
                    nom: this.nouveauEtudiant.fullname.split(' ')[0],
                    prenom: this.nouveauEtudiant.fullname.split(' ')[1],
                    grade: parseInt(this.nouveauEtudiant.grade)
                })
            }

            this.sortTable()
        },

        sortTable() {
            this.etudiants.sort((a, b) => {
                return b.grade - a.grade;
              });
        },

        countEtudiantsAuDessusMoyenne() {
            const auDessusMoyenne = this.etudiants.filter(etudiant => etudiant.grade < this.moyenneClasse);
            return auDessusMoyenne.length;
        },

        }
    };

createApp(etudiantsApp).mount('#app');