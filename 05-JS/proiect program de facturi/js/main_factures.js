
const { createApp } = Vue;

const factureApp = {
    data() {
        return {

        };
    },
    async mounted() {

    },
    methods: {
        main() {
            window.location.href = "f001.html"
        },
        facture() {
            window.location.href = "facture.html";
        },
        factureTVA() {
            window.location.href = "factureTVA.html";
        },
        liste1() {
            window.location.href = "liste_factures.html";
        },
        devis() {
            window.location.href = "devis.html";
        },
        devisTVA() {
            window.location.href = "devisTVA.html";
        },
        liste2() {
            window.location.href = "liste_devises.html";
        },
    }
}

createApp(factureApp).mount('#app')