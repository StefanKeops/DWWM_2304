// Funcția pentru generarea pseudonimului

function generatePseudo() 
{
    var nom = document.getElementById('nomUtilisateur').value;
    var prenom = document.getElementById('prenomUtilisateur').value;
    var pseudo = nom.substr(0, 3) + prenom.substr(0, 3) + Math.floor(Math.random() * 100);
    document.getElementById('pseudo').value = pseudo;
    document.getElementById('valider').disabled = false;
}

document.getElementById('nomUtilisateur').addEventListener('input', generatePseudo);
document.getElementById('prenomUtilisateur').addEventListener('input', generatePseudo);

// Funcția pentru stocarea datelor în localStorage

function storeFormData() 
{
    var formData = 
    {
        pseudo: document.getElementById('pseudo').value,
        nom: document.getElementById('nomUtilisateur').value,
        prenom: document.getElementById('prenomUtilisateur').value,
        email: document.getElementById('email').value,
        jour: document.getElementById('jour').value,
        mois: document.getElementById('mois').value,
        annee: document.getElementById('annee').value,
        commentaire: document.getElementById('commentaire').value
    };

    localStorage.setItem('formData', JSON.stringify(formData));
}

// Funcția pentru afișarea datelor pe pagina "accueil.html"

/*console.log(storeFormData())*/

function displayFormDataOnAccueil() 
{
    var formData = localStorage.getItem('formData');
    if (formData) 
    {
        formData = JSON.parse(formData);
    
        document.getElementById('displayPseudo').textContent = formData.pseudo;
        document.getElementById('displayNom').textContent = formData.nom;
        document.getElementById('displayPrenom').textContent = formData.prenom;
        document.getElementById('displayEmail').textContent = formData.email;
        document.getElementById('displayDateDeNaissance').textContent = formData.jour + '/' + formData.mois + '/' + formData.annee;
        document.getElementById('displayCommentaire').textContent = formData.commentaire;
    }
}

// creation d'un cookie qui va existé un journée

function newCookie(_nom, _valeur)
{
    let dateJour = new Date();
    let dateExpire = new Date(dateJour.getFullYear(), dateJour.getMonth() +1, dateJour.getDate());
    dateExpire = dateExpire.toUTCString();
    document.cookie = _nom + '=' + _valeur + '; expires =' + dateExpire + '; SameSite = lax'; // ou strict pour l'utillisation selulement pout le site
}

document.getElementById('valider').addEventListener('click', function()
{
    newCookie('nom', document.getElementById('nomUtilisateur').value);
    window.location.href = "accueil.html";
})

// functie pentru aflarea valorii numerice a unui sir de caractere

function valNum(maChaine)
{
    maChaine = maChaine.toUpperCase(); // convertirea din minuscule in majuscule
    let somme = 0; // reinitializarea la 0 a sumei

    for (let i = 0; i < maChaine.lenght; i++) // cautarea fiecarui caracter din sir
    {
        const codeAscii = maChaine.charCodeAT; (i) // obtinerea codului ASCII al caracterului
        somme += valeurCaracter; // adaugarea valorii in suma

        return somme;
    }
}

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
        uneOption.text = monthNames[i - 1];
        document.querySelector("#mois").options[i] = uneOption;
    }
}
afficheMois();

function afficheAnee()
{
    let uneOption = document.createElement('option');
    uneOption.value = 0;
    uneOption.text = "choisissez votre anée de naissance";
    document.querySelector("#anee").options[0] = uneOption;
}