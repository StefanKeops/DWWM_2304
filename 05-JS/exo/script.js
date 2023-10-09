function afficher(_prenom, _age) {

    _prenom = document.querySelector('#prenom').value;
    _age = document.querySelector('#age').value;

    let res = document.querySelector('#resultat');

    if (_prenom !== ' ' && _age >= 18) {
        res.innerHTML = 'Bonjour ' + _prenom + ' votre âge est ' + _age;
    }
    else {
        res.innerHTML = 'Compléter/corriger le formulaire';
    }

}

document.querySelector('#valider').addEventListener('click', () => {

    afficher('prenom', 'age');

});

function majorite(_age) {
    _age = document.querySelector('#age').value;

    let res = document.querySelector('#majoritate');

    if(_age >= 18){
        res.innerHTML = "Vous êtes majeur";
    }
    else if (_age < 18 ){
        res.innerHTML = "Vous êtes mineur";
    }
    else {
        res.innerHTML = 'Compléter/corriger le formulaire';
    }
}

document.querySelector('#valider').addEventListener('click', () => {

    majorite('_age');

});

function retraite(_age) {
    _age = document.querySelector('#age').value;

    let res = document.querySelector('#pensie');

    if (_age < 64){
        let x = 64 - _age;
        res.innerHTML = "Il vous reste " + x + " année(s) avant la retraite.";
    }
    else if (_age > 64){
        let x = _age - 64;
        res.innerHTML = "Vous êtes à la retraite depuis " + x + "année(s)."
    }
    else{
        res.innerHTML = "Vous prenez votre retraite cette année !"
    }
}

document.querySelector('#valider').addEventListener('click', () => {

    retraite('_age');

});

