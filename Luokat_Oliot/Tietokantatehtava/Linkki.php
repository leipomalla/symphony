<?php
/*Koodaa Linkki-luokka, johon voi tallettaa WWW-sivun tiedot (ominaisuudet)

* id

* linkki

* otsikkokuvaus

* avainsana

Lisää luokkaan konstruktori tietojen tallentamista varten. Lisää luokkaan TulostaTiedot-metodi, jonka avulla linkin tiedot voidaan tulostaa, niin että kukin ominaisuus on omalla rivillä yhdessä ominaisuuden kanssa.

Koodaa sovellus (linkkiTesti.php) jolla voit testata luokan toimintaa. Käytä testauksessa seuraavia tietoja

* id = 1

* linkki = ”http://www.mysql.com”

* otsikko = ”MySQL-tietokannan kotisivu”

* kuvaus = ”Relaatiotietokanta”

* avainsana = ”mysql” */

Class Linkki {
    private $id;
    private $linkki;
    private $otsikko;
    private $kuvaus;
    private $avainsana;

    /*public function __construct($tunniste){
        $this->id = $tunniste;

    }*/
    public function setLinkki($address){
       $this->linkki =  $address;
    }
    public function getLinkki(){
        return $this->linkki;
    }
     public function setOtsikko($otsikko){
       $this->otsikko =  $otsikko;
    }
    public function getOtsikko(){
        return $this->otsikko;
    }
    public function setKuvaus($kuvaus){
       $this->kuvaus =  $kuvaus;
    }
    public function getKuvaus(){
        return $this->kuvaus;
    }
    public function setAvainsana($avainsana){
       $this->avainsana = $avainsana;
    }
    public function getAvainsana(){
        return $this->avainsana;
    }
    public function tulostaTiedot(){
        echo "Linkin id on " . $this->id . ", osoite " . $this->getLinkki() .". 
        Sivun otsikko on " . $this->getOtsikko() . ". <br> Sivun kuvaus: " . $this->getKuvaus()
        . ". Avainsana: " . $this->getAvainsana() . ".";
    }
    public function luoYhteysTietokantaan()
    {
        //viittaus luokkaan YHteydenHallinta
        include("../Henkilosto/YhteydenHallinta.php");
        // Yhteys tietokantaan
        $this->yhteydenhallinta = new YhteydenHallinta();
    }
    public function haeKaikkiLinkit()
    {
        return $this->yhteydenhallinta->suoritaHakuLause("select * from linkit");
    }

}