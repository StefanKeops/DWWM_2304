/** @var {HTMLELEMENT} imputDateNaissance champ de saisie de la date de naissance*/

const imputDateNaissance = document.getElementById("dateNaissance");
const buttonCalculer = document.getElementById("calculer");
const divResultatDate = document.getElementById("divResultatDate");
const divResultatIntervalle = document.getElementById("resultatIntervalle");

// FUNCTIONS

/**
 * vérifie que la date passée en paramètre est située dans le passée
 * @param {Date} _date  date à évaluer
 * @returns {boolean} vrai si la date est dans le passé, faux sinon
 */
function estDansLePasse(_date) {

    if(!(_date instanceof Date)) {

        throw new Error("La date fournie n'est pas valide")

    }

    dateAujourdhui = new Date();

    return dateAujourdhui > _date;
}
/**
 * retourner l'intervalle entre la date fournie en parametre et la date du jour
 * @param {Date} dateAEvaluer la date à évaluer
 * @returns {Number} l'intervalle en année entre la date fournie en parametre et la date du jour
 */
function intervalleDate(dateAEvaluer) {
    if(!(dateAEvaluer instanceof Date))
    {

        throw new Error("La date fournie n'est pas valide");
    }

    let dateAujourdhui = new Date();

    let diffDate = dateAujourdhui - dateAEvaluer;
    return parseInt(diffDate/(1000*3600*24*365));

}

// EVENEMENTS

buttonCalculer.addEventListener("click", () => {
    let dateNaissance = new Date(imputDateNaissance.nodeValue);

    if (estDansLePasse(dateNaissance)) {

        divResultatDate.innerHTML = "Vous êtes né le: " + dateNaissance.toLocaleDateString("fr") + "à" + dateNaissance.toLocaleDateString("fr");
        divResultatIntervalle.innerHTML = "Ils'est écoulé" + intervalleDate(dateNaissance.getDate) + "année depuis votre naissance";
    } else {
        divResultatDate.innerHTML = "Veuillez saisie une date dans le passé";
    }
});