<?php
/*Koodaa Auto-luokka, jolla on seuraavat ominaisuudet

* rekisterinumero

* merkki

* malli

* valmistusvuosi

Koodaa sovellus (autoTesti.php), joka tulostaa kahden auton tiedot eri riville. Lisää luokkaan Auto seuraavat yksityiset (private) ominaisuudet

* tankinTilavuus

* bensanMaara

Lisää luokkaan seuraavat omat metodit

* käynnisty

* tulostaAutonTiedot

* lisääBensaa($maara)

* aja

* sammuta

Lisää myös get- ja set metodit uusille ominaisuuksille.

Koodaa tulostaAutonTiedot, joka tulostaa kaikki auton ominaisuudet.

Koodaa käynnisty-metodi niin, että se kertoo auton käynnistyneen ja näyttää käynnistyneen auton bensan määrän sekä auton tankin tilavuuden.

Koodaa lisääBensaa-metodi, jolla voi lisätä autoon bensaa. Metodi näyttää lisäyksen tankissa olevan bensan määrän.

Koodaa aja-metodi, jolla autoa voi ajaa. Jokainen ajo vähentää bensaa yhdellä litralla.

Koodaa sammuta-metodi, joka kertoo auton sammuneen.

Testausalgoritmi (toiminta ohje testaukseen):

* Luo Auto-olio ja alusta se. Auton ominaisuudet voi keksiä itse. Käytä konstruktoria.

* Käynnistä auto käynnistä-metodin avulla.

* Aja autolla suorittamalla aja-metodia pari kertaa.

* Lisää autoon bensaa 10 litraa.

* Sammuta auto.*/

class Auto {
    private $rekisterinumero;
    private $merkki;
    private $malli;
    private $valmistusvuosi;
    private $tankinTilavuus;
    private $bensanMaara;

    public function __construct($rekkari){
        $this->rekisterinumero = $rekkari;
    }
    public function setMerkki($merkki){
        $this->merkki = $merkki;
    }
    public function getMerkki(){
        return $this->merkki;
    }
    public function setMalli($malli){
        
        $this->malli = $malli;
    }
    public function getMalli(){
        return $this->malli;
    }
    public function setVuosi($vuosi){
    
        $this->valmistusvuosi = $vuosi;
    }
    public function getVuosi(){
    
        return $this->valmistusvuosi;
    }
    public function setBensanMaara($maara){
    
        $this->bensanMaara = $maara;
    }
    public function getBensanMaara(){
    
        return $this->valmistusvuosi;
    }
    public function setTankinTilavuus($tilavuus){
    
        $this->tankinTilavuus = $tilavuus;
    }
    public function getTankinTilavuus(){
        return $this->tankinTilavuus;
    }
    public function tulostaAutot(){
        return "Auto: " . $this->rekisterinumero . ", merkki: " . $this->getMerkki(). ", malli: " .  $this->getMalli() 
        . " ja valmistusvuosi: " . $this->getVuosi() . ". <br> ";
    }
    public function kaynnista(){
        return "Auto on nyt käynnissä, tankin tilavuus on " . $this->tankinTilavuus . " kuutiolitraa. Bensaa 
        on " . $this->bensanMaara . " litraa. <br>";
    }
    public function tulostaTiedot(){
        echo $this->tulostaAutot() . "Auton tankissa on bensaa " . $this->bensanMaara . "/" . $this->tankinTilavuus . " litraa. <br>";
    }
    public function lisaaBensaa($maara){
        $this->bensanMaara = $this->bensanMaara + $maara;
        return "Bensan määrä on lisäyksen jälkeen  " . $this->bensanMaara . " litraa. <br>";
    }
    public function aja(){
        $this->bensanMaara = $this->bensanMaara - 1;
        return $this->bensanMaara;
    }
    public function sammuta(){
        return "Auto on nyt sammutettu. <br>";
    }



}