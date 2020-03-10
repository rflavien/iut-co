<?php

class Compte
{
    private $id;

    private $balance;

    public function __construct(int $id, float $balance)
    {
        $this->id = $id;
        $this->balance = $balance;
    }

    public function debiter(float $montant) {
        if ($montant <= 0) {
            throw new Exception("un débit doit être positif");
        }

        if ($montant > $this->balance) {
            throw new Exception("solde insufisant");
        }
        $this->balance -= $montant;
    }

    public function crediter(float $montant) {
        if ($montant <= 0) {
            throw new Exception("un crédit doit être positif");
        }

        $this->balance += $montant;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
