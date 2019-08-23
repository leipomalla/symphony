<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Matikkatesti</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include("Matikka.php"); ?>

</head>
<body>
<?php 

$muunnin = new Matikka();
/*$kalorit = $_POST['kalori']; //10
echo "<p>" . $kalorit . " cal = ". $muunnin->kaloreistaJouleiksi($kalorit) . "</p>";
$joulet = $_POST['joule']; //10
echo "<p>" . $joulet . " joulet = ". $muunnin->kaloreistaJouleiksi($joulet) . "</p>";*/
$säde = $_POST['säde']; //10
echo "<p>" . $säde . " pinta-ala = " . $muunnin->ympyra($säde) . "</p>";





/*$muunnin->ympyra("17");
$muunnin->suorakulmio("6", "9");
$muunnin->asteet(14);
$muunnin->radiaanit(7);*/


?>

</body>
</html>