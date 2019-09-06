<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Osoitetesti</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php include("Osoite.php")?>
</head>
<body>
    <?php
    $koti = new Osoite("Aunuksenkatu2", "78340", "Rääkkylä");
    $tyo = new Osoite("Vespertie 5", "01230", "Pornainen");

    echo $koti->tulostaOsoitteet();
    echo $tyo ->tulostaOsoitteet();

    ?>
</body>
</html>