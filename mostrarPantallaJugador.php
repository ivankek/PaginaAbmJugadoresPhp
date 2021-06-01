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
<body>

<!-- Header -->

<?php include "header.php" ?>

<!-- Fin header -->

<!-- Contenedor Principal -->
<div class="container mt-4">

    <div class="mt-3 mb-4">
        <h3 class="text-center text-light">Perfil del jugador:</h3>
    </div>

    <!-- Div container lista de jugadores -->
    <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row justify-content-center justify-content-md-start justify-content-lg-center bg-light p-4 border border-1 rounded">


        <?php

        include "mostrarJugador.php";

        if (isset($_GET["nombre"], $_GET["numero"], $_GET["posicion"], $_GET["imagen"], $_GET["descripcion"])) {

            $nombre = $_GET["nombre"];
            $numero = $_GET["numero"];
            $posicion = $_GET["posicion"];
            $imgMostrar = $_GET["imagen"];
            $imgMostrarPosicion = $_GET["imagenPosicion"];
            $descripcion = $_GET["descripcion"];


        }

        echo "<img class='border border-5 ms-4 col-10 col-md-5 col-lg-4' src='$imgMostrar'>";
        echo "<div class='d-flex flex-column'>";
        echo "<div class='d-flex justify-content-center justify-content-md-start justify-content-lg-start justify-content-xl-start'>";
        echo "<h2 class='mt-3 mt-lg-0 mt-md-0 mt-xl-0 ms-0 ms-md-3 ms-lg-5 ms-xl-5 text-primary'>Nombre:&nbsp</h2>";
        echo "<h2 class='mt-3 mt-lg-0 mt-md-0 mt-xl-0'>$nombre</h2>";
        echo "</div>";

        echo "<div class='d-flex justify-content-center justify-content-md-start justify-content-lg-start justify-content-xl-start'>";
        echo "<h2 class='mt-3 mt-lg-0 mt-md-0 mt-xl-0 ms-0 ms-md-3 ms-lg-5 ms-xl-5 text-primary'>Posición:&nbsp</h2>";
        echo "<img src='$imgMostrarPosicion' class='mt-3 mt-lg-0 mt-md-0 mt-xl-0 col-2 col-2-md col-lg-1 align-self-center' style='height: 2rem'>";
        echo "</div>";

        echo "<div class='d-flex justify-content-center justify-content-md-start justify-content-lg-start justify-content-xl-start'>";
        echo "<h2 class='mt-3 mt-lg-0 mt-md-0 mt-xl-0 ms-0 ms-md-3 ms-lg-5 ms-xl-5 text-primary'>Número:&nbsp</h2>";
        echo "<h2 class='mt-3 mt-lg-0 mt-md-0 mt-xl-0'>$numero</h2>";
        echo "</div>";
        echo "<div class='d-flex flex-column justify-content-center justify-content-md-start justify-content-lg-start justify-content-xl-start'>";
        echo "<h2 class='text-center text-md-start text-lg-start text-xl-start mt-3 mt-lg-0 mt-md-0 mt-xl-0 ms-0 ms-md-3 ms-lg-5 ms-xl-5 text-primary'>Descripción:&nbsp</h2>";
        echo "<p class='text-center text-md-start text-lg-start text-xl-start mt-1 mt-lg-0 mt-md-0 mt-xl-0 ms-0 ms-md-3 ms-lg-5 ms-xl-5 fs-2'>$descripcion</p>";
        echo "</div>";
        echo "</div>";

        echo "<a class='btn btn-primary align-self-end' href='jugadores.php' role='button'>Atrás</a>";

        ?>

        <!-- Fin Div tarjeta -->


    </div>
    <!-- Fin Container lista de jugadores -->


</div>
<!-- Fin Contenedor Principal -->


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

