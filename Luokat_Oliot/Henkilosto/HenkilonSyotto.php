<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="henkilo.css">
    <title>Lisää henkilö</title>
</head>

<body>
    <form class="form-signin" action="henkilonLisays.php" method="POST">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Lisää henkilö</h1>
        <label for="inputHenkilonumero" class="sr-only">Henkilönumero</label>
        <input name="henkilonumero" type="text" id="inputHenkilonumero" class="form-control" placeholder="Henkilonumero" required autofocus>
        <label for="inputEtunimi" class="sr-only">Etunimi</label>
        <input name="etunimi" type="text" id="inputEtunimi" class="form-control" placeholder="Etunimi" required>
        <label for="inputSukunimi" class="sr-only">Sukunimi</label>
        <input name="sukunimi" type="text" id="inputSukunimi" class="form-control" placeholder="Sukunimi" required>
        <label for="inputOsasto" class="sr-only">Osasto</label>
        <input name="osasto" type="text" id="inputOsasto" class="form-control" placeholder="Osasto" required>
        <label for="inputPalkka" class="sr-only">Palkka</label>
        <input name="palkka" type="text" id="inputPalkka" class="form-control" placeholder="Palkka" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Tallenna</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>