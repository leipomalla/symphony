<?php
/*Koodaa Osoite-luokka, jolla on seuraavat ominaisuudet

* lähiosoite

* postinumero

* postitoimipaikka

Koodaa sovellus (osoiteTesti.php), joka tulostaa yhdellä riville kahdet eri osoitetiedot. */
class Osoite{
    private $lahiosoite;
    private $postinumero;
    private $postitoimipaikka;

    public function __construct($osoite, $pnro, $ptp){
        $this->lahiosoite = $osoite;
        $this->postinumero = $pnro;
        $this->postitoimipaikka = $ptp;
    }
    public function tulostaOsoitteet(){
        return "Osoite on " . $this->lahiosoite . " " . $this->postinumero . " " . $this->postitoimipaikka . ". ";
    }

    
        
    


}








?>