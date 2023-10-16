const zipCodeSearchInput = document.getElementById("zipCodesSearch")
const li = document.querySelector("#list");
const ZipCodeFilter = document.getElementById("zipCodeFilter")
let data = [];


fetch("json/zipcodes.json")
    .then(response => {
        if (!response.ok) {
            throw new Error("Invalid HTTP response");
        }
        return response.json();
    })

    .then(zipCodesData => {
        data = zipCodesData;
        li(data);
    })
    .catch(error => console.error("Error loading JSON data", error));

    zipCodeSearchInput.addEventListener("input", function () {
        const searchTerm = zipCodeSearchInput.value;
        filterZipCodes(searchTerm);
    });

    ZipCodeFilter.addEventListener("change", function () {
        const selectedZipCode = ZipCodeFilter.value;
        if (selectedZipCode === "") {
            li(data);
        } else {
            const filteredZipCodes = data.filter(item => item.airline_name === selectedZipCode);
            li(filteredZipCodes);
        }
    });


    /*.then(zipCodesData => {
        const data = zipCodesData;
        const zipCodesSearch = document.getElementById("zipCodesSearch");
        const citySuggestion = document.getElementById("citySuggestions")

        zipCodesSearch.addEventListener("input", function () {
            const searchTerm = zipCodesSearch.value.trim();
            if (searchTerm.lenght >=2) {
                const filteredCities = data.filter (item => item.codePostal.include(searchTerm));
                citySuggestion.innerHTML = "";
                filteredCities.forEach(city => {
                    const option = document.createElement("option");
                    option.value = city.codePostal + "-" + city.ville;
                    citySuggestion.appendChild(option);
                });
            } else {
                citySuggestion.innerHTML = "";
            }
        });

        const searchButton = document.getElementById("searchButton");
        const cityInfo = document.getElementById("cityInfo");
        searchButton.addEventListener("click", function () {
            const selectedValue = zipCodesSearch.value;
            const selectedCity = data.find(item => (item.codePostal + "-" + item.ville === selectedValue));
            if (selectedCity) {
                cityInfo.innerHTML = '<p>Code Postale: ${selectedCity.codePostal}</p><p>Ville: ${selectedCity.ville}</p>';
            } else {
                cityInfo.innerHTML = "Ville non trouve.";
            }
        })
    })
    .catch(error => console.error("Error loading JSON data", error));*/

