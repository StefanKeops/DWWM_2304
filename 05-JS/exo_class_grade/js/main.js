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
            moyenneClasse: 0,
            etudiantsAuDessusMoyenne: 0,
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl);
        this.etudiants = json.map(item => {
            const [nom, prenom] = item.fullname.split(" ");
            return { nom, prenom, grade: item.grade };
        });

        this.etudiantCount = this.etudiants.length;

        const totalNotes = this.etudiants.reduce((total, etudiant) => total + etudiant.grade, 0);
        this.moyenneClasse = (totalNotes / this.etudiants.length).toFixed(2);

        this.etudiantsAuDessusMoyenne = this.countEtudiantsAuDessusMoyenne();
    },
    methods: {
        ajouterEtudiant() {
            const nomPrenom = this.nouveauEtudiant.fullname.trim();
            const grade = parseFloat(this.nouveauEtudiant.grade);

            const nomPrenomPattern = /^[A-Z][a-z]+ [A-Z][a-z]+$/;
            if (!nomPrenomPattern.test(nomPrenom)) {
                alert("Le nom prénom doit être formaté correctement.");
                return;
            }

            if (isNaN(grade) || grade < 0 || grade > 20) {
                alert("La note doit être un nombre compris entre 0 et 20.");
                return;
            }

            const [nom, prenom] = nomPrenom.split(' ');
            this.etudiants.push({
                nom: nom.charAt(0).toUpperCase() + nom.slice(1).toLowerCase(),
                prenom: prenom.charAt(0).toUpperCase() + prenom.slice(1).toLowerCase(),
                grade: grade
            });

            const totalNotes = this.etudiants.reduce((total, etudiant) => total + etudiant.grade, 0);
            this.moyenneClasse = (totalNotes / this.etudiants.length).toFixed(2);

            this.sortTable();
            this.etudiantCount = this.etudiants.length;

            this.etudiantsAuDessusMoyenne = this.countEtudiantsAuDessusMoyenne();

            this.nouveauEtudiant.fullname = '';
            this.nouveauEtudiant.grade = 0;
        },
        
        sortTable() {
            this.etudiants.sort((a, b) => {
                return b.grade - a.grade;
            });
        },
        
        countEtudiantsAuDessusMoyenne() {
            const auDessusMoyenne = this.etudiants.filter(etudiant => etudiant.grade > this.moyenneClasse);
                console.log("Număr studenți deasupra mediei:", auDessusMoyenne.length);
            return auDessusMoyenne.length;
        },
    }
};

createApp(etudiantsApp).mount('#app');
