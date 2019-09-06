<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Autosovellus</title>

</head>

<body>

    <?php include 'navbar/navbar.php';
    include 'Autot.php';

    //Luodaan autot-olio
    $auto = new Autot();

    //Pyydetään autot-oliota ottamaan yhteys tietokantaan
    $auto->luoYhteysTietokantaan();

    //Haetaan kaikki hautot tietokannasta
    $autot = $auto->haeKaikkiAutot();

    ?>

    <h1>Kaikki autot</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="background-color: pink" >Rekisterinumero</th>
                <th scope="col">Merkki</th>
                <th scope="col">Malli</th>
                <th scope="col">Vuosi</th>
                <th scope="col">Toiminnot</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Tulostetaan kaikki autot
            foreach ($autot as $auto) {
                $id = $auto['rekisterinumero']; //tallennetaan muuttujaan jotta koodi kauniimpaa
                ?>
                <tr>
                    <td><?php echo $id ?></th>
                    <td><?php echo $auto['merkki'] ?></td>
                    <td><?php echo $auto['malli'] ?></td>
                    <td><?php echo $auto['valmistusvuosi'] ?></td>
                    <td><button muuta-id="<?php echo $id ?>" class="btn btn-primary muuta-object"> Muuta
                            <button class="btn btn-danger poista-object"> Poista</td>

                <?php
                }
                ?>
        </tbody>






        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
        <script>
            // Siirry muuta-sivulle
            $(document).on('click', '.muuta-object', function() {
                var id = $(this).attr('muuta-id');
                bootbox.confirm({
                    message: "Oletko varma?",
                    buttons: {
                        confirm: {
                            label: 'Kyllä',
                            className: 'btn-danger'
                        },
                        cancel: {
                            label: 'En',
                            className: 'btn-primary'

                        }
                    },
                    callback: function(result) {
                        //Painettiinko kyllä-painiketta?
                        if (result == true) {
                            //Kyllä -> muuta-sivulle
                            var url = "muutaAuto.php?id=" + id;
                            $(location).attr('href', url);

                        }
                    }
                })
            })
        </script>
</body>

</html>