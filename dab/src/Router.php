<?php

class Router
{
    public function callAction(string $choix)
    {
        switch ($choix) {
            case Action::DEPOT:
                // @todo call dépot
                break;
            case Action::CONSULTATION:
                // @todo call consultation
                break;
            case Action::RETRAIT:
                // @todo call retrait
                break;
        }
    }
}
