import { Db } from "./db.js";
import { Etudiant } from "./etudiant.js";

const apiUrl ="../json/eval.json"

const { createApp } = vue;

const etudiantsAPP = {
    data() {
        return {
            etudiants: [],
            etudiantCount: 0,
            sortBy: 'asc',
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl)
    },
    methods: {

    }
}