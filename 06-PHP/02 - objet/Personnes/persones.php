<?php

class Persones {
    private $dateNaissance;
    private $prenom;
    private $nom;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }
}

class Adresse {
    private $codePostal;
    private $nomCommune;
    private $nomRue;
    private $numeroRue;

    public function __construct($numeroRue, $nomRue, $codePostal, $nomCommune) {
        $this->numeroRue = $numeroRue;
        $this->nomRue = $nomRue;
        $this->codePostal = $codePostal;
        $this->nomCommune = $nomCommune;
    }

    public function getNumeroRue() {
        return $this->numeroRue;
    }

    public function getNomRue() {
        return $this->nomRue;
    }

    public function getCodePostal() {
        return $this->codePostal;
    }

    public function getNomCommune() {
        return $this->nomCommune;
    }
}

class Client extends Personne {
    private $adresse;
    private $numeroClient;

    public function __construct($numeroClient, $nom, $prenom, $dateNaissance, $adresse) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->adresse = $adresse;
        $this->numeroClient = $numeroClient;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCodeClient() {
        return $this->codeClient;
    }
}

class Intervenant extends Personne {
    private $autresRevenus;
    private $salaire;

    public function __construct($nom, $prenom, $dateNaissance, $salaire, $autresRevenus) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->salaire = $salaire;
        $this->autresRevenus = $autresRevenus;
    }

    public function getSalaires() {
        return $this->salaire;
    }

    public function getAutresRevenus() {
        return $this->autresRevenus;
    }

    
}


?>