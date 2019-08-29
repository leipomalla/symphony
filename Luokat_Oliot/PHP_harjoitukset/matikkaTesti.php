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
$muunnin->kaloreistaJouleiksi("48");
$muunnin->ympyra("17");
$muunnin->suorakulmio("6", "9");
$muunnin->asteet(14);
$muunnin->radiaanit(7);


?>

</body>
</html>