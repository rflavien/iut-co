<?php

class Menu
{
    /** @var League\CLImate\CLImate */
    private $climate;

    public function __construct(\League\CLImate\CLImate $climate)
    {
        $this->climate = $climate;
    }

    public function afficherPour(PorteurCarte $utilisateur)
    {
        $options  = [
            'retrait' => "Retirer de l'argent"
        ];

        if ($utilisateur instanceof Client) {
            $options['depot'] = "Déposer de l'argent";
            $options['consultation'] = "Consulter la balance du compte";
        }

        $input    = $this->climate->br()->radio('Que souhaitez vous faire :', $options);
        $response = $input->prompt();

        var_dump($response);
    }
}
