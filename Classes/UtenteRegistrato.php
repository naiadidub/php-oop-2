<?php
require_once __DIR__.'/Utente.php';

class UtenteRegistrato extends Utente{
    protected $sconto;
    protected $carte;

    function __construct($_nome, $_cognome, $_Email, $_Eta, $_sconto, $_Carte=[]){
        parent::__construct($_nome, $_cognome, $_Email, $_Eta);
        $this->sconto = $_sconto;
        $this->carte = $_Carte;
    }
    public function getSconto(){
        return $this->sconto;
    }
    public function setSconto($_sconto){
        $this->sconto = $_sconto;
    }
    public function setCards($_Carte){
        $this->carte[] = $_Carte;
    }
}