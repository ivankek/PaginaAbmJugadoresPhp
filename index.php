<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página futbolistas alta, baja y modificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="bodyIndex" class="bg-light">

<!-- Header -->

<?php include "header.php" ?>

<!-- Fin header -->

<div class="container d-flex flex-column flex-md-row flex-lg-row flex-xl-row">

    <div class="d-flex justify-content-center">

        <img class="col-5 col-md-10 col-lg-7 ms-3 mt-5" src="img/messiFondo.png">

    </div>

    <div class="container d-flex flex-column col-10 col-md-5 col-lg-5 col-xl-5 p-5 shadow-lg">

        <h1 class="text-light pt-3 text-center" style="text-shadow: 0 0 5px black;">Armá tu Selección Argentina</h1>

        <p class="text-light text-center mt-3 mt-lg-5g fs-5" style="text-shadow: 0 0 5px black;">Ingresá tus jugadores preferidos y armá tu selección preferida.</p>
        <p class="text-light text-center mt-3 fs-5" style="text-shadow: 0 0 5px black;">Buscá, modificá, eliminá los jugadores que quieras.</p>

        <a type="button" href="jugadores.php" class="container mt-4 btn btn-outline-light w-50">Ver Jugadores</a>
    </div>

</div>

<!-- Scripts bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
<!-- Fin scripts bootstrap-->

</body>

<footer>

    <?php

    include "footer.php";

    ?>

</footer>
</html>

