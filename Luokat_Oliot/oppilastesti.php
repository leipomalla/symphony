<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Oppilastesti</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include("Oppilas.php"); ?>

</head>
<body>
<?php 
$mari = new Oppilas("Mari", "Reppuli","012863468");
$lasse = new Oppilas("Lasse", "Ahvenainen", "1300656");

$mari->setOsoite("Konnuntie 1");
$lasse->setOsoite("Dante's peak");

$mari->setEmail("baggins@email.com");
$lasse->setEmail("lasse@example.com");

$mari->setOpnro("012863469");
$lasse->setOpnro("1300659");

echo $mari->tulostaOppilaat();
echo $lasse->tulostaOppilaat();







?>
</body>