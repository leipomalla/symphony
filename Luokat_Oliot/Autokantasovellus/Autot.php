<?php
class Autot
{
    private $rekisterinumero;
    private $merkki;
    private $malli;
    private $vuosi;
    private $yhteydenhallinta;

    public function __construct()
    { }
    public function setRekisterinumero($rekkari)
    {
        $this->rekisterinumero = $rekkari;
    }
    public function getRekisterinumero()
    {
        return $this->rekisterinumero;
    }
    public function setMerkki($autonmerkki)
    {
        $this->merkki = $autonmerkki;
    }
    public function getMerkki()
    {

        return $this->merkki;
    }
    public function setMalli($autonmalli)
    {

        $this->malli = $autonmalli;
    }
    public function getMalli()
    {
        return $this->malli;
    }
    public function setVuosi($autonvuosi)
    {
        $this->vuosi = $autonvuosi;
    }
    public function getVuosi()
    {
        return $this->vuosi;
    }

    public function luoYhteysTietokantaan()
    {
        //viittaus luokkaan YHteydenHallinta
        include("Yhteydenhallinta.php");
        // Yhteys tietokantaan
        $this->yhteydenhallinta = new YhteydenHallinta();
    }
    public function haeKaikkiAutot()
    {
        return $this->yhteydenhallinta->suoritaHakuLause("select * from autot");
    }
    public function lisaaAuto()
    {
        return $this->yhteydenhallinta->suoritaPaivitysLause(
            "insert into autot(rekisterinumero, merkki, malli, valmistusvuosi)
           values (?,?,?,?)",
            array($this->rekisterinumero, $this->merkki, $this->malli, $this->vuosi)
        );
    }
}
