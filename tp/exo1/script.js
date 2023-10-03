// Funcția pentru generarea pseudonimului pe baza la nume si prenume

/*function generatePseudo() 
{
    var nom = document.getElementById('nomUtilisateur').value;
    var prenom = document.getElementById('prenomUtilisateur').value;
    var pseudo = nom.substr(0, 3) + prenom.substr(0, 3) + Math.floor(Math.random() * 100);
    document.getElementById('pseudo').value = pseudo;
    document.getElementById('valider').disabled = false;
}

document.getElementById('nomUtilisateur').addEventListener('input', generatePseudo);
document.getElementById('prenomUtilisateur').addEventListener('input', generatePseudo);*/

// creation d'un cookie qui va existé un journée

/*function newCookie(_nom, _valeur)
{
    let dateJour = new Date();
    let dateExpire = new Date(dateJour.getFullYear(), dateJour.getMonth() +1, dateJour.getDate());
    dateExpire = dateExpire.toUTCString();
    document.cookie = _nom + '=' + _valeur + '; expires =' + dateExpire + '; SameSite = lax'; // ou strict pour l'utillisation selulement pout le site
}

document.getElementById('valider').addEventListener('click', function()
{
    newCookie('nom', document.getElementById('nom').value);
    window.location.href = "accueil.html";
})*/

// functie pentru aflarea valorii numerice a unui sir de caractere

function valNum(maChaine)
{
    maChaine = maChaine.toUpperCase(); // convertirea din minuscule in majuscule
    console.log(maChaine)
    let somme = 0; // reinitializarea la 0 a sumei
    console.log(somme)

    for (let i = 0; i < maChaine.length; i++) // cautarea fiecarui caracter din sir
    {
        const nume = maChaine.charCodeAt(i) - 64; // obtinerea codului ASCII al caracterului
        console.log(nume)
        somme += nume; // adaugarea valorii in suma
        console.log("Somme"+ somme)  
    }
    return somme;
}

document.getElementById('nom').addEventListener('blur', () => 
{
    valNum('nom')
})

document.getElementById('prenom').addEventListener('blur', () => 
{
    valNum('prenom')
})

// bucla care se repeta ... utila pentru liste ca zile, luni, ani, departamente

function  afficheJour()
{
 let uneOption = document.createElement('option');
 uneOption.value = 0;
 uneOption.text = "choisissez votre jour de naissance";
 document.querySelector("#jour").options[0] = uneOption;
/*document.querySelector("#jour").appendChild(uneOption);*/
    for (let i = 1; i < 32; i++) 
    {
        uneOption = document.createElement('option');
        uneOption.value = i;
        uneOption.text = i;
        document.querySelector("#jour").options[i] = uneOption;
    }
}
afficheJour();

function afficheMois()
{
    let uneOption = document.createElement('option');
    uneOption.value = 0; 
    uneOption.text = "choisissez votre mois de naissance";
    document.querySelector("#mois").options[0] = uneOption;
    for (let i = 1; i < 13; i++)
    {
        uneOption = document.createElement('option');
        uneOption.value = i;
        const monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        uneOption.text = monthNames[i];
        document.querySelector("#mois").options[i] = uneOption;
    }
}
afficheMois();

function afficheAnee()
{
    let uneOption = document.createElement('option');
    uneOption.value = 0;
    uneOption.text = "choisissez votre année de naissance";
    document.querySelector("#annee").options[0] = uneOption;
    for (let i = 1900; i <= 2023; i++)
    {
        uneOption = document.createElement('option');
        uneOption.value = i;
        uneOption.text = i;
        document.querySelector('#annee').appendChild(uneOption);
    }
}
afficheAnee();

// calculul pseudonimului in functie de selnul astrologic

function generatePseudo2()
{
    var jour = document.getElementById('jour').value;
    var mois = document.getElementById('mois').value;
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;

    let signeAstrologique = '';

    if ((mois == 0 && jour >= 21) || (mois == 1 && jour <= 19)) {
        signeAstrologique = 'Verseau'
    }
    else if ((mois == 1 && jour >= 20) || (mois == 2 && jour <= 20)) {
        signeAstrologique = 'Poissons'
    }
    else if ((mois == 2 && jour >= 21) || (mois == 3 && jour <= 20)) {
        signeAstrologique = 'Bélier'
    }
    else if ((mois == 3 && jour >= 21) || (mois == 4 && jour <= 20)) {
        signeAstrologique = 'Taureau'
    }
    else if ((mois == 4 && jour >= 22) || (mois == 5 && jour <= 21)) {
        signeAstrologique = 'Gémeaux'
    }
    else if ((mois == 5 && jour >= 22) || (mois == 6 && jour <= 22)) {
        signeAstrologique = 'Cancer'
    }
    else if ((mois == 6 && jour >= 23) || (mois == 7 && jour <= 22)) {
        signeAstrologique = 'Lion'
    }
    else if ((mois == 7 && jour >= 23) || (mois == 8 && jour <= 22)) {
        signeAstrologique = 'Vierge'
    }
    else if ((mois == 8 && jour >= 23) || (mois == 9 && jour <= 22)) {
        signeAstrologique = 'Balance'
    }
    else if ((mois == 9 && jour >= 23) || (mois == 10 && jour <= 22)) {
        signeAstrologique = 'Scorpion'
    }
    else if ((mois == 10 && jour >= 23) || (mois == 11 && jour <= 21)) {
        signeAstrologique = 'Sagittaire'
    }
    else
    {
        signeAstrologique = 'Capricorne'
    }

    var valeurNom = valNum(nom);
    var valeurPrenom = valNum(prenom);

    pseudo = signeAstrologique + (valeurNom + valeurPrenom);

    document.getElementById('pseudo').value = pseudo;

    document.getElementById('valider').disabled = false;
}

var nom = document.getElementById('nom').value;
var prenom = document.getElementById('prenom').value;
document.getElementById('nom').addEventListener('input', function () 
{
    if (document.getElementById('prenom').value && document.getElementById('jour').value && document.getElementById('mois').value) 
    {   

        generatePseudo2();
        valNum(prenom);
    }
});

document.getElementById('prenom').addEventListener('input', function () 
{
    if (document.getElementById('nom').value && document.getElementById('jour').value && document.getElementById('mois').value) 
    {
        generatePseudo2();
        valNum(nom);
    }
});

document.getElementById('jour').addEventListener('change', function () 
{
    if (document.getElementById('nom').value && document.getElementById('prenom').value && document.getElementById('mois').value) 
    {
        generatePseudo2();
    }
});

document.getElementById('mois').addEventListener('change', function () 
{
    if (document.getElementById('nom').value && document.getElementById('prenom').value && document.getElementById('jour').value) 
    {
        generatePseudo2();
    }
});

function newCookie(_nom, _valeur)
{
    let dateJour = new Date();
    let dateExpire = new Date(dateJour.getFullYear(), dateJour.getMonth() +1, dateJour.getDate());
    dateExpire = dateExpire.toUTCString();
    document.cookie = _nom + '=' + _valeur + '; expires =' + dateExpire + '; SameSite = lax'; // ou strict pour l'utillisation selulement pout le site
}

document.getElementById('valider').addEventListener('click', function()
{
    newCookie('pseudo', document.getElementById('pseudo').value);
    newCookie('nom', document.getElementById('nom').value);
    newCookie('prenom', document.getElementById('prenom').value);
    newCookie('emailUtilisateur', document.getElementById('emailUtilisateur').value);
    newCookie('jour', document.getElementById('jour').value);
    newCookie('mois', document.getElementById('mois').value);
    newCookie('annee', document.getElementById('annee').value);
    newCookie('commentaire', document.getElementById('commentaire').value);
    
    window.location.href = "accueil.html";
})

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




// Funcția pentru stocarea datelor în localStorage

/*function storeFormData() 
{
    var formData = 
    {
        pseudo: document.getElementById('pseudo').value,
        nom: document.getElementById('nom').value,
        prenom: document.getElementById('prenom').value,
        email: document.getElementById('email').value,
        jour: document.getElementById('jour').value,
        mois: document.getElementById('mois').value,
        annee: document.getElementById('annee').value,
        commentaire: document.getElementById('commentaire').value
    };

    localStorage.setItem('formData', JSON.stringify(formData));
}

// Funcția pentru afișarea datelor pe pagina "accueil.html"

/*console.log(storeFormData())

function displayFormDataOnAccueil() 
{
    var formData = localStorage.getItem('formData');
    if (formData) 
    {
        formData = JSON.parse(formData);
    
        document.getElementById('pseudo').textContent = formData.pseudo;
        document.getElementById('nom').textContent = formData.nom;
        document.getElementById('prenom').textContent = formData.prenom;
        document.getElementById('email').textContent = formData.email;
        document.getElementById('dateDeNaissance').textContent = formData.jour + '/' + formData.mois + '/' + formData.annee;
        document.getElementById('commentaire').textContent = formData.commentaire;
    }
}

function newCookie(_nom, _valeur)
{
    let dateJour = new Date();
    let dateExpire = new Date(dateJour.getFullYear(), dateJour.getMonth() +1, dateJour.getDate());
    dateExpire = dateExpire.toUTCString();
    document.cookie = _nom + '=' + _valeur + '; expires =' + dateExpire + '; SameSite = lax'; // ou strict pour l'utillisation selulement pout le site
}

document.getElementById('valider').addEventListener('click', function()
{
    newCookie('pseudo', document.getElementById('pseudo').value);
    newCookie('nom', document.getElementById('nom').value);
    newCookie('prenom', document.getElementById('prenom').value);
    newCookie('emailUtilisateur', document.getElementById('emailUtilisateur').value);
    newCookie('jour', document.getElementById('jour').value);
    newCookie('mois', document.getElementById('mois').value);
    newCookie('annee', document.getElementById('annee').value);
    newCookie('commentaire', document.getElementById('commentaire').value);
    
    window.location.href = "accueil.html";
}*/