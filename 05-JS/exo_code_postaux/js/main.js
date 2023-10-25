fetch("zipcodes.json")
            .then(response => {
                if (!response.ok) {
                    throw new Error("Réponse HTTP invalide");
                }
                return response.json();
            })
            .then(zipCodesData => {
                const data = zipCodesData;
                const zipCodeSearch = document.getElementById("zipCodeSearch");
                const citySuggestions = document.getElementById("citySuggestions");

                zipCodeSearch.addEventListener("input", function () {
                    const searchTerm = zipCodeSearch.value.trim();
                    if (searchTerm.length >= 2) {
                        const filteredCities = data.filter(item => item.codePostal.includes(searchTerm));
                        citySuggestions.innerHTML = "";
                        filteredCities.forEach(city => {
                            const option = document.createElement("option");
                            option.value = city.codePostal 
                            option.innerText = city.nomCommune
                            citySuggestions.appendChild(option);
                        });
                    } else {
                        citySuggestions.innerHTML = "";
                    }
                });

                const searchButton = document.getElementById("searchButton");
                const cityInfo = document.getElementById("cityInfo");
                searchButton.addEventListener("click", function () {
                    const selectedValue = zipCodeSearch.value;
                    const selectedCity = data.find(item => (item.codePostal) === selectedValue);
                    if (selectedCity) {
                        cityInfo.innerHTML = `<p>Code Postal : ${selectedCity.codePostal}</p><p>Ville : ${selectedCity.nomCommune}</p>`;
                    } else {
                        cityInfo.innerHTML = "Ville non trouvée.";
                    }
                });
            })
            .catch(error => console.error("Erreur lors du chargement des données JSON", error));
