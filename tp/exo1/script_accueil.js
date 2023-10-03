function getCookieValue(cookieName) {
    var name = cookieName + "=";
    var rCookie = document.cookie.split("|")
    
    for (var i = 0; rCookie.length; i++) {
        var cookie = rCookie[i].trim();
        var partCookie = cookie.split("|");

        if (partCookie[0] == cookieName) {
            return partCookie[1];
        }
    }

    return "";
}

var nom = getCookieValue("nom");
var prenom = getCookieValue("prenom");
var dateNaissance = getCookieValue("jour") + "/" + getCookieValue("mois") + "/" + getCookieValue("annee");
var pseudo = getCookieValue("pseudo");

document.getElementById("nom").textContent = nom;
document.getElementById("prenom").textContent = prenomnom;
document.getElementById("dateNaissance").textContent = dateNaissance;
document.getElementById("psudo").textContent = pseudo;

var mois = getCookieValue("mois");
var jour = getCookieValue("jour")
var annee = getCookieValue("annee")

function joursAvantAnniversaire(mois, jour, annee)
{
    var dateCourante = new Date();
    var dateAnniv = new Date(annee, mois - 1, jour);

    if (dateAnniv < dateCourante)
    {
        dateAnniv.setFullYear(dateCourante.getFullYear() + 1);
    }

    var joursRestante = Math.ceil(difference / (1000 * 60 * 60 * 24));
    return joursRestante;
 }