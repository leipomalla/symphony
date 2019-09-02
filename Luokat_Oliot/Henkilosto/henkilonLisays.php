<?php
// Referenssi Henkilo-olioon
include "Henkilo.php";

//Luodaan Henkilo-olio
$henkilo = new Henkilo();

//Asetetaan lomakkeelta tulleet tiedot muuttujiin
$henkilo->setHenkilonumero($_POST['henkilonumero']);
$henkilo->setEtunimi($_POST['etunimi']);
$henkilo->setSukunimi($_POST['sukunimi']);
$henkilo->setOsasto($_POST['osasto']);
$henkilo->setPalkka($_POST['palkka']);

//Pyydetään Henkilö-oliota ottamaan yhteys tietokantaan
$henkilo->luoYhteysTietokantaan();
$lisaysOK = $henkilo->lisaaHenkilo();

if($lisaysOK > 0){
    echo "Lisäys onnistui.";
} else {
    echo "Lisäys epäonnistui.";
}