const MA_POMPE = 1;

const app = {
    data() {
    return {
        prixLitre: 1.89,
        button:  "Vente",
        distribution:  false,
        quantite:  0,
        intervalle:  null,
        }
    },
    computed: {
        prixAPayer() {
            return this.prixLitre * this.quantite
        },
        quantiteDistribueeArondie() {
            return quantite.toFixed(2)
        }
    }, methods: {
        
    }
}

vue.create.App(app).mount('#app')