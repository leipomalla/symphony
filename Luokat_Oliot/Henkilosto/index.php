<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Henkilöstösovellus</title>
    
  </head>
  <body>
  
  <?php include 'navbar/navbar.php';
  include 'Henkilo.php';

  //Luodaan henkilö-olio
  $henkilo = new Henkilo();

  //Pyydetään henkilö-oliota ottamaan yhteys tietokantaan
  $henkilo->luoYhteysTietokantaan();

  //Haetaan kaikki henkilot tietokannasta
  $henkilot = $henkilo->haeKaikkiHenkilot();

  ?>

    <h1>Kaikki henkilöt</h1>
    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">Henkilonumero</th>
    <th scope="col">Etunimi</th>
    <th scope="col">Sukunimi</th>
    <th scope="col">Osasto</th>
    <th scope="col">Palkka</th>
    <th scope="col">Toiminnot</th>
    </tr>
    </thead>
<tbody>
    <?php
      // Tulostetaan kaikki henkilöt
      foreach($henkilot as $henkilo){
        $id = $henkilo['henkilonumero']; //tallennetaan muuttujaan jotta koodi kauniimpaa
    ?>
      <tr>
        <td><?php echo $id ?></th>
        <td><?php echo $henkilo['etunimi'] ?></td>
        <td><?php echo $henkilo['sukunimi'] ?></td>
        <td><?php echo $henkilo['osasto'] ?></td>
        <td><?php echo $henkilo['palkka'] ?></td>
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
    $(document).on('click', '.muuta-object', function(){
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
        callback: function(result){
          //Painettiinko kyllä-painiketta?
          if(result ==true){
            //Kyllä -> muuta-sivulle
            var url = "muutaHenkilo.php?id=" + id;
            $(location).attr('href', url);

          }
        }
      })
    })
    
    </script>
    </body>
</html>