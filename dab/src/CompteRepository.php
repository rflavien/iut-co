<?php

class CompteRepository
{
    public function getCompteById(int $id): ?Compte
    {
        return new Compte($id, 1252);
    }
}
