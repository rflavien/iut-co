<?php

class Client extends PorteurCarte
{
    public function deposer(float $montant): void
    {
        $this->compteCourant->crediter($montant);
    }

    public function consulter(): float
    {
        return $this->compteCourant->getBalance();
    }
}
