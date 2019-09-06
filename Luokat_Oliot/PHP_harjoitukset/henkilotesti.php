<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Henkilotesti </title>
<?php include("Henkilo.php"); ?>
</head>
<body>

<?php
$kaija = new Henkilo("Kaija Kokkonen");
$reijo = new Henkilo("Reijo Raikuli");

var_dump($reijo);

echo "Kaijan koko nimi on " . $kaija->getNimi() . "<br>";

$kaija->setPinkoodi("1234");

//echo "Kaijan pinkoodi on " . $kaija->getPinkoodi(). "<br>";

echo $kaija->tulostaHenkilo();

?>
</body>
</html>
