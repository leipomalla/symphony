<?php
/*Lisää Oppilas luokkaan uusi yksityinen (private) ominaisuus

* opiskelijanumero

Muokkaa Oppilas luokan konstruktoria lisäämällä siihen uusi parametri $opiskelijanro, sekä lisäämällä julkinen set-metodi
opiskelijanumero muokkaamista varten ja yksityinen get-metodi, jota muut metodit voivat käyttää.

Lisää vielä Oppilas-luokkaan julkinen metodi tulostaOppilas, joka palauttaa oppilaan kaikki tiedot mukaan lukien 
hänen opiskelijanumeronsa.

Koodaa sovellus (oppilasTesti2.php), joka tulostaa oppilaiden tiedot tulostaOppilas-metodin avulla.

Muuta sitten set-metodin avulla oppilaan opiskelijanumroa ja tulosta hänen tietonsa uudelleen */

class Oppilas{
    private $etunimi;
    private $sukunimi;
    private $kotiosoite;
    private $email;
    private $opiskelijanro;

    public function __construct($etunimi, $sukunimi, $opnro){
        $this->etunimi = $etunimi;
        $this->sukunimi = $sukunimi;
        $this->opiskelijanro = $opnro;
    }


    public function setOsoite($osoite){
        $this->kotiosoite = $osoite;
    }
    public function getOsoite(){
    
        return $this->kotiosoite;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setOpnro($opnro){
        $this->opiskelijanro = $opnro;
    }
    private function getOpnro(){
        return $this->opiskelijanro;
    }
    public function tulostaOppilaat(){
        return  "Oppilaan " . $this->getOpnro() . " nimi on " . $this->etunimi . " " . $this->sukunimi  . ", osoite: " . $this->getOsoite() . 
        " ja email-osoite: " . $this->getEmail() . "<br>";
    }
}
