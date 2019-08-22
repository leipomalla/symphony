<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>PlayerHealthManager</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include("PlayerHealthManager.php"); ?>

</head>
<body>
<?php 

$pelaaja1 = new PlayerHealthManager("200");
echo $pelaaja1->addPlayerHealth("100");


?>

</body>
</html>
