<?php

class LecteurCarte
{
    private $compteRepository;

    public function __construct(CompteRepository $compteRepository)
    {
        $this->compteRepository = $compteRepository;
    }

    public function getUtilisateur(): PorteurCarte
    {
        $userName = $this->getClientNameFromChipCard();
        $userCompte = $this->compteRepository->getCompteById(
            $this->getUserIdFromChipCard()
        );
        if (true === $this->getIsClientFromChipCard()) {
            return new Client($userName, $userCompte);
        }

        return new PorteurCarte($userName, $userCompte);
    }

    private function getUserIdFromChipCard(): int
    {
        // simulation de fonction bas niveau
        return 123546;
    }

    private function getIsClientFromChipCard(): bool
    {
        // simulation de fonction bas niveau
        return rand(0,1) == true;
    }

    private function getClientNameFromChipCard(): string
    {
        // simulation de fonction bas niveau
        return "John";
    }
}
