function afficher(_prenom, _age) {

    _prenom = document.querySelector('#prenom').value;
    _age = document.querySelector('#age').value;

    let res = document.querySelector('#resultat');

    if (_prenom !== ' ' && _age >= 18) {
        res.innerHTML = 'Bonjour <span>' + _prenom + '</span>, votre âge est <span>' + _age + '</span>';
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
        res.innerHTML = "Vous êtes <span>majeur</span>";
    }
    else if (_age < 18 ){
        res.innerHTML = "Vous êtes <span>mineur</span>";
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
        res.innerHTML = "Il vous reste <span>" + x + "</span> année(s) avant la retraite.";
    }
    else if (_age > 64){
        let x = _age - 64;
        res.innerHTML = "Vous êtes à la retraite depuis <span>" + x + "</span>année(s)."
    }
    else{
        res.innerHTML = "Vous prenez votre retraite cette année !"
    }
}

document.querySelector('#valider').addEventListener('click', () => {

    retraite('_age');

});

