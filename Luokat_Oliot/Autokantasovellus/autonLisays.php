<?php
// Referenssi Autot-olioon
include "Autot.php";

//Luodaan Henkilo-olio
$auto1 = new Autot();

//Asetetaan lomakkeelta tulleet tiedot muuttujiin
$auto1->setRekisterinumero($_POST['rekisterinumero']);
$auto1->setMerkki($_POST['merkki']);
$auto1->setMalli($_POST['malli']);
$auto1->setVuosi($_POST['valmistusvuosi']);

//Pyydetään Autot-oliota ottamaan yhteys tietokantaan
$auto1->luoYhteysTietokantaan();
$lisaysOK = $auto1->lisaaAuto();

if ($lisaysOK > 0) {
    echo "Lisäys onnistui.";
} else {
    echo "Lisäys epäonnistui.";
}
