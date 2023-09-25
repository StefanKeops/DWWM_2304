function afficher()
{
    let dateJour = new Date();
    let annee = dateJour.getFullYear();
    let jour = dateJour.getDate();
    let mois = dateJour.getMonth()+1;
    mois = (mois<10)? '0'+mois: mois;
    jous = (jour<10)? '0'+jour:jour;
    let chaineDate = jour + '-' + mois + '-' + annee;
    document.getElementById("madate").value = chaineDate
}

document.querySelector("#btndate").addEventListener("click", function()
{
    afficher();
})

let txtheure = document.querySelector("#monheure");
txtheure.value = 'text';


/* alert('hello world'); */