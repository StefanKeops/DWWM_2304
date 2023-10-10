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
                document.getElementById("card-nom").textContent = cardAttack.name;
                document.querySelector(".card-played").textContent = 'Played: ' + cardAttack.played +'|  ';
                document.querySelector(".card-victory").textContent = '  Victories: ' + cardAttack.victory;
                document.querySelector(".power-value").textContent = cardAttack.power;
                document.querySelector(".attack-value").textContent = cardAttack.attack;
                document.querySelector(".defense-value").textContent = cardAttack.armor;
            }
            else
            {
                console.log("Aucune carte trouvée.");
            }
        })
        .catch(error => console.error("Erreur lors du chargement des données JSON", error));
    })

    document.addEventListener("DOMContentLoaded", function () {
        fetch("json/cardgame.json")
            .then(response => {
                if (!response.ok) {
                    throw new Error("Réponse HTTP non valide");
                }
                return response.json();
            })
            .then(data => {
                const cardContainer = document.getElementById("card-container");
                const cardTemplate = document.getElementById("card-template");
                data.forEach(item => {
                    const cardClone = cardTemplate.cloneNode(true);
                    cardClone.classList.remove("card-template");
    
    cardClone.querySelector(".card-id").textContent = item.id;
    cardClone.querySelector(".card-nom").textContent = item.name;
                    cardClone.querySelector(".card-played").textContent = 'Played: ' + item.played + ' | ';
                    cardClone.querySelector(".card-victory").textContent = ' Victories: ' + item.victory;
                    cardClone.querySelector(".power-value").textContent = item.power;
                    cardClone.querySelector(".attack-value").textContent = item.attack;
                    cardClone.querySelector(".defense-value").textContent = item.armor;
        
                    cardContainer.appendChild(cardClone);
    
                });
    
            })
    
            .catch(error => console.error("Eroare la încărcarea datelor JSON", error));
    
    });