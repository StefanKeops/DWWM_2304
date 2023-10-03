// Funcția pentru stocarea datelor în localStorage

function storeFormData() 
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

/*console.log(storeFormData())*/

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
})