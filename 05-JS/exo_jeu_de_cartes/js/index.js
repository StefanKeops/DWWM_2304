document.addEventListener("DOMContentLoaded", function () {
    fetch("json/cardgame.json")
        .then(response => {
            if (!response.ok) {
                throw new Error("Réponse HTTP non valide");
            }
            return response.json();
        })
        .then(data => {
            const tableBody = document.querySelector("#jeu tbody");
            data.forEach(item => {
                const row = tableBody.insertRow();
                row.insertCell().textContent = item.id;
                row.insertCell().textContent = item.name;
                row.insertCell().textContent = item.level;
                row.insertCell().textContent = item.description;
                row.insertCell().textContent = item.power;
                row.insertCell().textContent = item.attack;
                row.insertCell().textContent = item.armor;
                row.insertCell().textContent = item.damage;
                row.insertCell().textContent = item.mitigation;
                row.insertCell().textContent = item.played;
                row.insertCell().textContent = item.victory;
                row.insertCell().textContent = item.defeat;
                row.insertCell().textContent = item.draw;
            });
        })
        .catch(error => console.error("Erreur lors du chargement des données JSON", error));
});

document.addEventListener("DOMContentLoaded", function () {
    fetch("json/cardgame.json")
        .then(response => {
            if (!response.ok) {
                throw new Error("Réponse HTTP non valide");
            }
            return response.json();
        })
        .then(data => {
            let cardAttack = null;
            let attackValue = 0;

            data.forEach(item => {
                if (item.attack > attackValue) {
                    attackValue = item.attack;
                    cardAttack = item;
                }
            });
            if (cardAttack !== null) {
                document.getElementById("card-id").textContent = cardAttack.id;
                document.getElementById("nom").textContent = cardAttack.name;
                document.querySelector(".two2").textContent = 'Played: ' + cardAttack.played +'|  ';
                document.querySelector(".two3").textContent = '  Victories: ' + cardAttack.victory;
                document.querySelector(".four").textContent = 'Power ' + cardAttack.power;
                document.querySelector(".five").textContent = 'Attack ' + cardAttack.attack;
                document.querySelector(".six").textContent = 'Defense ' + cardAttack.armor;
            }
            else
            {
                console.log("Aucune carte trouvée.");
            }
        })
        .catch(error => console.error("Erreur lors du chargement des données JSON", error));
    })