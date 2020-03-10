<?php

class PorteurCarte
{
    private $nom;

    protected $compteCourant;

    public function __construct(
        string $nom,
        Compte $compteCourant
    ) {
        $this->nom = $nom;
        $this->compteCourant = $compteCourant;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function retirer(float $montant)
    {
        $this->compteCourant->debiter($montant);
    }
}
