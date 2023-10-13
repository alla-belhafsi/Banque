<?php

class Compte {

    private string $libellé;
    private float $soldeInitial;
    private string $deviseMonetaire;
    private string $titulaireUnique;
    private Titulaire $titulaire;

    public function __construct(string $libellé, float $soldeInitial, string $deviseMonetaire, string $titulaireUnique, Titulaire $titulaire) {
        $this->libellé = $libellé;
        $this->soldeInitial = $soldeInitial;
        $this->deviseMonetaire = $deviseMonetaire;
        $this->titulaireUnique = $titulaireUnique;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }

    public function getLibellé(): string {
        return $this->libellé;
    }

    public function setLibellé($libellé) {
        $this->libellé = $libellé;
        return $this;
    }

    public function getSoldeInitial(): float {
        return $this->soldeInitial;
    }

    public function setSoldeInitial($soldeInitial) {
        $this->soldeInitial = $soldeInitial;
        return $this;
    }

    public function getDeviseMonetaire(): string {
        return $this->deviseMonetaire;
    }

    public function setDeviseMonetaire($deviseMonetaire) {
        $this->deviseMonetaire = $deviseMonetaire;
        return $this;
    }

    public function getTitulaireUnique(): string {
        return $this->titulaireUnique;
    }

    public function setTitulaireUnique($titulaireUnique) {
        $this->titulaireUnique = $titulaireUnique;
        return $this;
    }

    public function getTitulaire(): string {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire) {
        $this->titulaire = $titulaire;
        return $this;
    }

    public function __toString() {
        return $this->$libellé." ".$this->soldeInitial." ".$this->deviseMonetaire." ".$this->titulaireUnique;
    }
    
}