<?php

class Menu
{
    /** @var League\CLImate\CLImate */
    private $climate;

    public function __construct(\League\CLImate\CLImate $climate)
    {
        $this->climate = $climate;
    }

    public function afficherPour(PorteurCarte $utilisateur): string
    {
        $options  = [
            Action::RETRAIT => "Retirer de l'argent"
        ];

        if ($utilisateur instanceof Client) {
            $options[Action::DEPOT] = "Déposer de l'argent";
            $options[Action::CONSULTATION] = "Consulter la balance du compte";
        }

        $input    = $this->climate->br()->radio('Que souhaitez vous faire :', $options);
        $response = $input->prompt();

        return $response;
    }
}
