// JavaScript function to validate the form
function validateForm() {
    // Get the selected department from the dropdown menu
    var department = document.getElementById("departement").value;

    // Get all checked checkboxes with the name "institutions[]"
    var checkboxes = document.querySelectorAll('input[name="institutions[]"]:checked');

    // Check if a department is not selected
    if (department === "") {
        alert("Veuillez choisir un département.");
        return false;
    }

    // Check if at least one checkbox is not checked
    if (checkboxes.length === 0) {
        alert("Veuillez sélectionner au moins un type d'établissement.");
        return false;
    }

    // If both conditions are met, the form is considered valid
    return true;
}
