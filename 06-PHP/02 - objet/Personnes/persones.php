<?php

class Personne {
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
        return $this->numeroClient;
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

    public function getSalaire() {
        return $this->salaire;
    }

    public function getAutresRevenus() {
        return $this->autresRevenus;
    }

    public function setSalaire($nouveauSalaire) {
        $this->salaire = $nouveauSalaire;
    }

    public function setAutresRevenus($nouveauxRevenus) {
        $this->autresRevenus = $nouveauxRevenus;
    }

    public function calculerCharges() {
        $taxeSalaire = ($this->getSalaire() * 0.2);
        $taxeAutresRevenus = ($this->getAutresRevenus() * 0.15);
        
        $curentDate = new DateTime();
        $interval = new DateInterval('P55Y');
        $olderDate = $curentDate->sub($interval);

        if ($this->getDateNaissance() < $olderDate) {
            return $taxeSalaire /= 2;
            return $taxeAutresRevenus /= 2;
        }
        
        return $taxeSalaire + $taxeAutresRevenus;
    }
}

class Intervention {
    private $client;
    private $dateHeure;
    private $description;
    private $intervenant;

    public function __construct($dateHeure, $intervenant, $client, $description) {
        $this->dateHeure = $dateHeure;
        $this->intervenant = $intervenant;
        $this->client = $client;
        $this->description = $description;
    }

    public function getDateHeure() {
        return $this->dateHeure;
    }

    public function getDescription() {
        return $this->description; 
    }

    public function getIntervenant() {
        return $this->intervenant;
    }

    public function getClient() {
        return $this->intervenant;
    }
}

$adresse = new Adresse(27, 'Rue des maçons', '68200', 'Mulhouse');
$client = new Client('C1', 'Csaszar', 'Stefan', '1979-10-08', $adresse);

echo 'Nom du client: ' . $client->getNom() . ' ' . $client->getPrenom() . PHP_EOL;  echo'<br>';
echo 'Date de naissance: ' . $client->getDateNaissance() . PHP_EOL; echo'<br>';
echo 'Adresse du client: ' . $client->getAdresse()->getNumeroRue() . ' ' . $client->getAdresse()->getNomRue() . ', ' . $client->getAdresse()->getCodePostal() . ' ' . $client->getAdresse()->getNomCommune() . PHP_EOL; echo'<br>';

$intervener = new Intervenant('Csaszar', 'Stefan', '1979-10-08', 8400, 11800);

echo PHP_EOL . 'Nom de l\'intervenant: ' . $intervener->getNom() . ' ' . $intervener->getPrenom() . PHP_EOL; echo'<br>';
echo 'Date de naissance: ' . $intervener->getDateNaissance() . PHP_EOL; echo'<br>';
echo 'Salaire: €' . $intervener->getSalaire() . PHP_EOL; echo'<br>';
echo 'Autres Revenus: €' . $intervener->getAutresRevenus() . PHP_EOL; echo'<br>';

$charges = $intervener->calculerCharges();

echo 'Total Charges: €' . $charges . PHP_EOL; echo'<br>';

$intervention = new Intervention('2023-12-01 14:30', $intervener, $client, 'Fixing plumbing issue');

echo PHP_EOL . 'Date et heure de l\'intervention: ' . $intervention->getDateHeure() . PHP_EOL; echo'<br>';
echo 'Intervenant: ' . $intervention->getIntervenant()->getNom() . ' ' . $intervention->getIntervenant()->getPrenom() . PHP_EOL; echo'<br>';
echo 'Client: ' . $intervention->getClient()->getNom() . ' ' . $intervention->getClient()->getPrenom() . PHP_EOL; echo'<br>';
echo 'Description: ' . $intervention->getDescription() . PHP_EOL;
?>