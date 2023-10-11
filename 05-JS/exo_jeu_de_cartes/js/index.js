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
;

    fetch("json/cardgame.json")
        .then(response => {
            if (!response.ok) {
                throw new Error("Réponse HTTP non valide");
            }
            return response.json();
        })
        .then(data => {
            // Card cu cea mai mare putere de atac
            let cardAttack = null;
            let attackValue = 0;

            // Card cu cea mai mare armură
            let cardArmor = null;
            let armorValue = 0;

            // Card cu cele mai multe partide jucate
            let cardMostPlayed = null;
            let mostPlayedValue = 0;

            // Card cu cele mai multe victorii
            let cardMostVictories = null;
            let mostVictoriesValue = 0;

            data.forEach(item => {
                if (item.attack > attackValue) {
                    attackValue = item.attack;
                    cardAttack = item;
                }

                if (item.armor > armorValue) {
                    armorValue = item.armor;
                    cardArmor = item;
                }

                if (item.played > mostPlayedValue) {
                    mostPlayedValue = item.played;
                    cardMostPlayed = item;
                }

                if (item.victory > mostVictoriesValue) {
                    mostVictoriesValue = item.victory;
                    cardMostVictories = item;
                }
            });

            // Afișarea cardurilor
            displayCard("La carte possédant le plus de puissance d’attaque", cardAttack, "cardAttack");
            displayCard("La carte possédant le plus d’armure", cardArmor, "cardArmor");
            displayCard("La carte ayant le plus de parties jouées", cardMostPlayed, "cardMostPlayed");
            displayCard("La carte ayant le plus grand nombre de victoires", cardMostVictories, "cardMostVictories");
        })
        .catch(error => console.error("Erreur lors du chargement des données JSON", error));
;

function displayCard(title, card, containerId) {
    const container = document.getElementById(containerId);

    while (container.firstChild) {
        container.removeChild(container.firstChild);
    }

    if (card !== null) {
        container.innerHTML = `<h2>${title}</h2>`;
        const cardContainer = document.createElement("div");
        cardContainer.classList.add("card-container");

        const cardClone = document.getElementById("card-template").cloneNode(true);
        cardClone.style.display = "block";
        cardClone.classList.remove("card-template");
        cardClone.querySelector(".card-id").textContent = card.id;
        cardClone.querySelector(".card-nom").textContent = card.name;
        cardClone.querySelector(".card-played").textContent = 'Played: ' + card.played + ' | ';
        cardClone.querySelector(".card-victory").textContent = ' Victories: ' + card.victory;
        cardClone.querySelector(".power-value").textContent = card.power;
        cardClone.querySelector(".attack-value").textContent = card.attack;
        cardClone.querySelector(".defense-value").textContent = card.armor;

        cardContainer.appendChild(cardClone);
        container.appendChild(cardContainer);
    }
}



    