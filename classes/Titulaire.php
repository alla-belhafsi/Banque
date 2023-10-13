<?php

class Titulaire {

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->comptes = [];
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
         return $this;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }

    public function getDateNaissance(): string {
        return $this->dateNaissance->format("Y");
    }
    
    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
         return $this;
    }

    public function getComptes() {
        return $this->comptes;
    }

    public function setComptes($comptes) {
        $this->comptes = $comptes;
        return $this;
    }

    public function addCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }

    public function __toString() {
        return $this->nom." ".$this->prenom." ".$this->dateNaissance->format("Y")." ".$this->ville;
    }


}
