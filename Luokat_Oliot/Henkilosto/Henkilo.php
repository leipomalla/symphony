<?php 
class Henkilo {
   private $henkilonumero;
   private $etunimi;
   private $sukunimi;
   private $osasto;
   private $palkka;

   // Tietokantaa varten
   private $yhteydenhallinta;
   // void tarkoittaa että funktio ei palauta mitään
   public function setHenkilonumero($henkilonumero)
   {
       $this->henkilonumero = $henkilonumero;
   }
   public function getHenkilonumero(){
       return $this->henkilonumero;
   }
   public function setEtunimi($etunimi){
       $this->etunimi = $etunimi;
   }
   public function getEtunimi(){
       return $this->etunimi;
   }
   public function setSukunimi($sukunimi){
       $this->sukunimi = $sukunimi;
   }
   public function getSukunimi(){
       return $this->sukunimi;
   }
   public function setOsasto($osasto){
       $this->osasto = $osasto;
   }
   public function getOsasto(){
       return $this->osasto;
   }
   public function setPalkka($palkka){
       $this->palkka = $palkka;
   }
   public function getPalkka(){
       return $this->palkka;
   }

    public function luoYhteysTietokantaan()
    {
        //viittaus luokkaan YHteydenHallinta
        include("YhteydenHallinta.php");
        // Yhteys tietokantaan
        $this->yhteydenhallinta = new YhteydenHallinta();
    }
    public function haeKaikkiHenkilot()
    {
        return $this->yhteydenhallinta->suoritaHakuLause("select * from henkilosto");
    }
    public function lisaaHenkilo()
    {
        return $this->yhteydenhallinta->suoritaPaivitysLause(
            "insert into henkilosto(henkilonumero, etunimi, sukunimi, osasto, palkka)
           values (?,?,?,?,?)",
            array($this->henkilonumero, $this->etunimi, $this->sukunimi, $this->osasto, $this->palkka)
        );
    }
}
?>