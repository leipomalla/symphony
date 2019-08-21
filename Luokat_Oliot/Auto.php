<?php
/*Koodaa Auto-luokka, jolla on seuraavat ominaisuudet

* rekisterinumero

* merkki

* malli

* valmistusvuosi

Koodaa sovellus (autoTesti.php), joka tulostaa kahden auton tiedot eri riville. */
class Auto {
    private $rekisterinumero;
    private $merkki;
    private $malli;
    private $valmistusvuosi;

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
    public function getVuosi()
    {
        return $this->valmistusvuosi;
    }
    public function tulostaAutot(){
        return "Auto: " . $this->rekisterinumero . ", merkki: " . $this->getMerkki(). ", malli: " .  $this->getMalli() 
        . " ja valmistusvuosi: " . $this->getVuosi() . ". <br> ";
    }



}