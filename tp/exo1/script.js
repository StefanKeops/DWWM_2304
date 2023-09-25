    generatePseudo()
    {
        var nom = document.getElementById('nomUtilisateur').value;
        var prenom = document.getElementById('prenomUtilisateur').value;
        var pseudo = nom.substr(0,3) + prenom.substr(0,3) + Math.floor(Math.random() * 100);
        document.getElementById('pseudo').value = pseudo;
        document.getElementById('valider').disable = false;
    }

    document.getElementById('nomUtilisateur').addEventListener('input', generatePseudo);
    document.getElementById('prenomUtilisateur').addEventListener('input', generatePseudo);

    function getFormDataFromLocalStorage() {
    var formData = localStorage.getItem('formData');

    if (formData) {
        formData = JSON.parse(formData);
        var formDataTable = document.getElementById('formDataTable').getElementsByTagName('tbody')[0];

        // Create a new table row
        var newRow = formDataTable.insertRow();

        // Insert data into the row cells
        var cellPseudo = newRow.insertCell(0); 
        cellPseudo.innerHTML = formData.pseudo; 
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
