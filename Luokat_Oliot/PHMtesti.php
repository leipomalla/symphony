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

$teemu = new PlayerHealthManager();
$teemu->setCurrentHP(200);
$teemu->setMaxHealth(500);
echo $teemu->hurtPlayer(150);
echo $teemu->addPlayerHealth(3000);

?>

</body>
</html>
