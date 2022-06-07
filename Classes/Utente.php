<?php
class Utente {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $eta;
    protected $carte;

    function __construct($_nome, $_cognome, $_Email, $_Eta, $_Carte=[]) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_Email;
        $this->eta = $_Eta;
        $this->carte = $_Carte;
    }

    public function getNome() {
        return $this->nome;
    }
    public function getCognome() {
        return $this->cognome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getEta() {
        return $this->eta;
    }

    public function setNome($_nome) {
        $this->nome = $_nome;
    }
    public function setCognome($_cognome) {
        $this->cognome = $_cognome;
    }
    public function setEmail($_Email) {
        $this->email = $_Email;
    }
    public function setEta($_Eta) {
        $this->eta = $_Eta;
    }

    public function setCards($_Carte){
        $this->carte[] = $_Carte;
    }
}