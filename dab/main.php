<?php

require_once __DIR__ . '/src/PorteurCarte.php';
require_once __DIR__ . '/src/Compte.php';
require_once __DIR__ . '/src/Client.php';
require_once __DIR__ . '/src/LecteurCarte.php';
require_once __DIR__ . '/src/CompteRepository.php';
require_once __DIR__ . '/src/Menu.php';
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
$gestionnaireDeMenu = new Menu($climate);
$gestionnaireDeMenu->afficherPour($utilisateur);
