<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sivutaulukkosovellus</title>

</head>

<body>

    <?php include 'navbar/navbar.php';
    include 'Linkki.php';

    echo "Böö!";

    $linkkisivu = new Linkki();

    $linkkisivu->luoYhteysTietokantaan();
    print $kaikkilinkit = $linkkisivu->haeKaikkiLinkit();


    ?>

    <h1>Kaikki sivut</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Järjestysnumero</th>
                <th scope="col">Linkki</th>
                <th scope="col">Otsikko</th>
                <th scope="col">Kuvaus</th>
                <th scope="col">Avainsana</th>
                <th scope="col">Toiminnot</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Tulostetaan kaikki linkit
            foreach ($kaikkilinkit as $linkki) {
                $id = $linkki['id'];
                ?>
                <tr>
                    <td><?php echo $id ?></th>
                    <td><?php echo $linkki['linkki'] ?></td>
                    <td><?php echo $otsikko['otsikko'] ?></td>
                    <td><?php echo $kuvaus['kuvaus'] ?></td>
                    <td><?php echo $avainsana['avainsana'] ?></td>
                    <td><button > Muuta</td>

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
            /*$(document).on('click', '.muuta-object', function() {
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
                            var url = "muutaHenkilo.php?id=" + id;
                            $(location).attr('href', url);

                        }
                    }
                })
            })*/
        </script>
</body>

</html>