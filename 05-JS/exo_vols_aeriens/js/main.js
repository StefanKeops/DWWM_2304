const companySearchInput = document.getElementById("companySearch");
const searchButton = document.getElementById("searchButton");
const tableBody = document.getElementById("#vols tbody")
let data = [];

fetch("json/flights.json")
    .then(response => {
        if (!response.ok) {
            throw new Error("Invalid HTTP response");
        }
        return response.json();
    })
    .then(data => {
        const tableBody = document.querySelector("#vols tbody");
        data.forEach(item => {
            const row = tableBody.insertRow();
            row.insertCell().textContent = item.flight_id;
            row.insertCell().textContent = item.start_city;
            row.insertCell().textContent = item.arrival_city;
            row.insertCell().textContent = item.start_time;
            row.insertCell().textContent = item.arrival_time;
            row.insertCell().textContent = item.flight_duration;
            row.insertCell().textContent = item.airline_name;
            row.insertCell().textContent = item.plane_maker;
            row.insertCell().textContent = item.plane_ref;
            row.insertCell().textContent = item.plane_type;
            row.insertCell().textContent = item.plane_capacity;
            row.insertCell().textContent = item.seats_free;
        });
    })
    .catch(error => console.error("Error loading JSON data", error));

companySearchInput.addEventListener("input", function () {
    searchTerm = companySearchInput.value;
})

function filterFlightsByCompany(searcTerm) {
    const tableBody = document.querySelector("#vols tbody");
}

fetch("json/flights.json")
    .then(response => {
        if (!response.ok) {
            throw new Error("Invalid HTTP response");
        }
        return response.json();
    })

    .then(flightsData => {
    data = flightsData;
    updateTable(data) // afisarea tuturor zborurilor
})
    
function updateTable(flights) {
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild) // eliminarea datelor din tabel
    }

    flights.forEach(item => {

        const row = tableBody.insertRow();

        row.insertCell().textContent = item.flight_id;
        row.insertCell().textContent = item.start_city;
        row.insertCell().textContent = item.arrival_city;
        row.insertCell().textContent = item.start_time;
        row.insertCell().textContent = item.arrival_time;
        row.insertCell().textContent = item.flight_duration;
        row.insertCell().textContent = item.airline_name;
        row.insertCell().textContent = item.plane_maker;
        row.insertCell().textContent = item.plane_ref;
        row.insertCell().textContent = item.plane_type;
        row.insertCell().textContent = item.plane_capacity;
        row.insertCell().textContent = item.seats_free;

    })
    .catch(error => console.error("Error loading JSON data", error));
}