<?php
/*Koodaa luokka Matikka, joka tarjoaa metodit seuraavien toimintojen suorittamiseksi

* muuntaa kilokalorit jouleiksi ja toisin päin

* laskea ympyrän pinta-ala

* laskea suorakulmion pinta-ala

* muuntaa Celsius-asteet Fahrenheit-asteiksi ja toisin päin.

* muuntaa radiaanit asteiksi

Etsi kaavat netistä.

Koodaa sovellus (matikkaTesti.php, jolla voit testata metodien toimintaa.

Piirrä Visiolla luokka Matikka ja sen metodit. Set- ja get-metodeja ei tarvitse lisätä luokkaan. */

Class Matikka{
    private $kilokalorit;
    private $joulet;
    private $fahrenheitit;
    private $celsiukset;
    private $asteet;
    private $radiaanit;

    public function __contruct(){
     $this->kilokalorit = $kalorit;
    }
    public function kaloreistaJouleiksi($yksikot){
        $this->joulet = $yksikot * 4.18400;
        $this->kilokalorit = $yksikot / 4.18400;
        echo $yksikot . " kilokaloria on " . $this->joulet . " joulea tai " .$yksikot . " joulea on " . $this->kilokalorit . " kilokaloria.<br>";
    }
    public function ympyra($sade){
        $pintaala = 3.14 * $sade *$sade;
        echo "Ympyrän pinta-ala on " . $pintaala . " yksikköä. <br>";
    }
    public function suorakulmio($sivu1, $sivu2){
        $pintaala = $sivu1 * $sivu2;
        echo "Suorakulmion pinta-ala on " . $pintaala . " yksikkoa. <br>";
    }
    public function asteet($yksikot){
        $this->fahrenheitit = $yksikot * 1.8 + 32;
        $this->celsiukset = ($yksikot - 32) / 1.8;
        echo $yksikot . " celsius-astetta on " . $this->fahrenheitit . " Fahrenheitia. <br>";
        echo $yksikot . " Fahrenheitia on " . $this->celsiukset . " celsiusta. <br>";
    }
    public function radiaanit($yksikot){
        $this->asteet = 57.2957795 * $yksikot;
        $this->radiaanit = $yksikot / 57.2957795;
        echo $yksikot . " radiaania on " . $this->asteet . " astetta.<br>";
        echo $yksikot . " astetta on " . $this->radiaanit . " radiaania.<br>";
    }
        
}