<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Osoitetesti</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include("Auto.php") ?>
</head>

<body>
    <?php
    $kia = new Auto("ZSI-640");
    $kia->setMerkki("Kia");
    $kia->setMalli("Cerato");
    $kia->setVuosi("2006");

    $aija = new Auto("EMJ-521");
    $aija->setMerkki("Toyota");
    $aija->setMalli("Aygo");
    $aija->setVuosi("2013");

    echo $aija->kaynnista();
    echo $aija->lisaaBensaa("13");
    $aija->aja();
    $aija->aja();
    echo $aija->sammuta();
    $aija->tulostaTiedot();


    echo $kia->tulostaTiedot();
    


    ?>
</body>

</html>