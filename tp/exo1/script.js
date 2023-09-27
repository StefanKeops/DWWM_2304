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
        document.getElementById('displayDateDeNaissance').textContent = formData.jour + '/' + formData.mois + '/' + formData.annee;
        document.getElementById('displayCommentaire').textContent = formData.commentaire;
    }
}

// crearea cookie cu o durata de viata de o zi

function newCookie(_nom, _valeur)
{
    let dateJour = new Date();
    let dateExpire = new Date(dateJour.getFullYear(), dateJour.getMonth() +1, dateJour.getDate());
    dateExpire = dateExpire.toUTCString();
    document.cookie = _nom + '=' + _valeur + '; expires =' + dateExpire + '; SameSite = lax'; // stict este pentru utilisarea doar pentru site
}

document.getElementById('valider').addEventListener('click', function()
{
    newCookie('nom', document.getElementById('nomUtilisateur').value);
    window.location.href = "accueil.html";
})