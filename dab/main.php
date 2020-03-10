<?php

require_once __DIR__ . '/src/PorteurCarte.php';
require_once __DIR__ . '/src/Compte.php';
require_once __DIR__ . '/src/Client.php';
require_once __DIR__ . '/src/LecteurCarte.php';
require_once __DIR__ . '/src/CompteRepository.php';
require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

$climate->green()->out('==DAB==');

// 1. identifier l'utilisateur
$lecteurCarte = new LecteurCarte(new CompteRepository());
$utilisateur = $lecteurCarte->getUtilisateur();

$climate->br()->out("Bonjour " . $utilisateur->getNom());

//$input = $climate->br()->password('entrez votre PIN : ');
//$codePIN = $input->prompt();

// 1.1 est-ce que le PIN est ok ?

// 2. proposer les actions possibles
$options  = [
    'retrait' => "Retirer de l'argent"
];

if ($utilisateur instanceof Client) {
    $options['depot'] = "Déposer de l'argent";
    $options['consultation'] = "Consulter la balance du compte";
}

$input    = $climate->br()->radio('Que souhaitez vous faire :', $options);
$response = $input->prompt();
var_dump($response);
