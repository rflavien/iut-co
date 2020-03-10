<?php

require_once __DIR__ . '/src/Domain/PorteurCarte.php';
require_once __DIR__ . '/src/Domain/Compte.php';
require_once __DIR__ . '/src/Domain/Client.php';
require_once __DIR__ . '/src/Domain/LecteurCarte.php';
require_once __DIR__ . '/src/Domain/CompteRepository.php';
require_once __DIR__ . '/src/Action.php';
require_once __DIR__ . '/src/Menu.php';
require_once __DIR__ . '/src/Router.php';
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
$choix = $gestionnaireDeMenu->afficherPour($utilisateur);

(new Router())->callAction($choix);
