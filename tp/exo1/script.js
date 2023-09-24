// Function to retrieve and display form data from local storage
function getFormDataFromLocalStorage() {
    var formData = localStorage.getItem('formData');

    if (formData) {
        formData = JSON.parse(formData);
        var formDataTable = document.getElementById('formDataTable').getElementsByTagName('tbody')[0];

        // Create a new table row
        var newRow = formDataTable.insertRow();

        // Insert data into the row cells
        var cellPseudo = newRow.insertCell(0); // Pseudo-ul este acum în prima coloană
        cellPseudo.innerHTML = formData.pseudo; // Adăugați Pseudo-ul în prima celulă
        var cellNom = newRow.insertCell(1);
        cellNom.innerHTML = formData.nom;
        var cellPrenom = newRow.insertCell(2);
        cellPrenom.innerHTML = formData.prenom;
        var cellDateNaissance = newRow.insertCell(3);
        cellDateNaissance.innerHTML = formData.jour + '/' + formData.mois + '/' + formData.annee;
        var cellCommentaire = newRow.insertCell(4);
        cellCommentaire.innerHTML = formData.commentaire;
    }
}

// Call the function to retrieve and display form data when the page loads
window.onload = getFormDataFromLocalStorage;
