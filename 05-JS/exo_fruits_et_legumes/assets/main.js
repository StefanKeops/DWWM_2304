const app = Vue.createApp({
    data() {
        return {
            boxes: ['VENTES', 'NOUVELLE VENTE', 'LEGUMES', 'NOUVEAU LEGUME']
        };
    }
});

app.mount('#app');