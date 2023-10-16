fetch("json/zipcodes.json")
    .then(response => {
        if (!response.ok) {
            throw new Error("Invalid HTTP response");
        }
        return response.json();
    })
    .then(zipCodesData => {
        data = zipCodesData;
        updateTable(data);
    })
    .catch(error => console.error("Error loading JSON data", error));

zipCodesSearchInput.addEventListener("input", function () {
    const searchTerm = zipCodesSearchInput.value;
    filterZipCodes(searchTerm);
});

function filterZipCodes(searchTerm) {
    const filteredZipCodes = data.filter(item => {
        const codePostal = item.codePostal.toLowerCase();
        return codePostal.includes(searchTerm.toLowerCase());
    });
    updateTable(filteredZipCodes);
}

zipCodesFilter.addEventListener("change", function () {
    const selectedZipCodes = zipCodesFilter.value;
    if (selectedZipCodes === "") {
        updateTable(data);
    } else {
        const filteredZipCodes = data.filter(item => item.codePostal === selectedZipCodes);
        updateTable(filteredZipCodes);
    }
});