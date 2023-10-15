const companySearchInput = document.getElementById("companySearch");
const tableBody = document.querySelector("#vols tbody");
const companyFilter = document.getElementById("companyFilter");

let data = [];

fetch("json/flights.json")
    .then(response => {
        if (!response.ok) {
            throw new Error("Invalid HTTP response");
        }
        return response.json();
    })
    .then(flightsData => {
        data = flightsData;
        updateTable(data);
    })
    .catch(error => console.error("Error loading JSON data", error));

companySearchInput.addEventListener("input", function () {
    const searchTerm = companySearchInput.value;
    filterFlightsByCompany(searchTerm);
});

function filterFlightsByCompany(searchTerm) {
    const filteredFlights = data.filter(item => {
        const company = item.airline_name.toLowerCase();
        return company.includes(searchTerm.toLowerCase());
    });
    updateTable(filteredFlights);
}

companyFilter.addEventListener("change", function () {
    const selectedCompany = companyFilter.value;
    if (selectedCompany === "") {
        updateTable(data);
    } else {
        const filteredFlights = data.filter(item => item.airline_name === selectedCompany);
        updateTable(filteredFlights);
    }
});

function formatDuration(durationMinutes) {
    const hours = Math.floor(durationMinutes / 60);
    const minutes = durationMinutes % 60;
    return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:00`;
}

function updateTable(flights) {
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
    }

    flights.forEach(item => {
        const row = tableBody.insertRow();
        row.insertCell().textContent = item.flight_id;
        row.insertCell().textContent = item.start_city;
        row.insertCell().textContent = item.arrival_city;
        row.insertCell().textContent = item.start_time;
        row.insertCell().textContent = item.arrival_time;
        
        const durationCell = row.insertCell();
        durationCell.textContent = formatDuration(item.flight_duration);

        row.insertCell().textContent = item.airline_name;
        row.insertCell().textContent = item.plane_maker;
        row.insertCell().textContent = item.plane_ref;
        row.insertCell().textContent = item.plane_type;
        row.insertCell().textContent = item.plane_capacity;
        row.insertCell().textContent = item.seats_free;
    });
}
