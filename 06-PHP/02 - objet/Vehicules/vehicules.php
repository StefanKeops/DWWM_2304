<?php

class Moteur {
    protected $marque;
    protected $vitesseMax;

    public function __construct($marque, $vitesseMax) {
        $this->marque = $marque;
        $this->vitesseMax = $vitesseMax;
    }

    // Getters and setters for marque and vitesseMax
}

class Voiture {
    protected $marque;
    protected $modele;
    protected $poids = 1000;
    protected $moteur;

    public function __construct($marque, $modele, $poids = 1000) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->poids = $poids;
    }

    public function setMoteur($moteur) {
        $this->moteur = $moteur;
    }

    public function getInfos() {
        return "{$this->marque} {$this->modele}, {$this->poids} Kg";
    }

    public function getVitesseMax() {
        return $this->moteur->getVitesseMax() - ($this->poids * 0.3);
    }
}

class VoitureDeCourse extends Voiture {
    public function getInfos() {
        return parent::getInfos() . ". Vitesse max : {$this->getVitesseMax()} km/h.";
    }

    public function getVitesseMax() {
        return $this->moteur->getVitesseMax() - ($this->poids * 0.05);
    }
}


$moteurVoiture = new Moteur("Citroën", 745);
$voiture = new Voiture("Citroën", "Visa");
$voiture->setMoteur($moteurVoiture);

$voitureDeCourse = new VoitureDeCourse("Renault", "F1", 450);
$voitureDeCourse->setMoteur($moteurVoiture);

echo $voiture->getInfos();  
echo $voitureDeCourse->getInfos();  