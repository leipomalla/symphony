<?php

class Henkilo {
    public $nimi;
    private $pinkoodi;

    public function __construct($nimi){ // kaksi alaviivaa konstruktorissa!
        $this->nimi = $nimi;
    }
    
        
    
    public function getNimi(){
        return $this->nimi;
    }
    public function setNimi($name) {
        $this->nimi = $name;
    }
    private function getPinkoodi(){
        return $this->pinkoodi;

    }
    public function setPinkoodi($pincode){
        $this->pinkoodi = $pincode;
    }
    public function tulostaHenkilo(){
        return "Henkilön nimi on " . $this->getNimi() . " ja pinkoodi " . $this->getPinkoodi();
    }
}
?>