<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Linkkitesti</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include("Linkki.php"); ?>

</head>
<body>
<?php 

$linkki1 = new Linkki("$1");
$linkki1->setLinkki("http://www.mysql.com");
$linkki1->tulostaTiedot();
$linkki1->setOtsikko(”MySQL-tietokannan kotisivu”);
?>

</body>
</html>
