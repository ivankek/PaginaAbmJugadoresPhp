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
<div class="container-fluid d-flex flex-column justify-content-center">

    <!-- Div Todos los jugadores y busqueda -->

    <div class="mt-5">
        <h3 class="text-center text-light">Todos los jugadores disponibles para que elijas</h3>

        <form class="d-flex mt-5 justify-content-center">
            <div id="buscador" class="input-group">
                <input id="buscar" type="search" class="form-control"
                       placeholder="Buscar jugador por nombre, posición o número"
                       style="background-color: transparent; box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.65); border-color: transparent;">
                <button type="submit" style="z-index: 100; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.65);"
                        class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-search"
                         viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                </button>
            </div>
        </form>

    </div>

    <!-- Fin Div Todos los jugadores y busqueda -->

    <!-- Div container lista de jugadores -->
    <div class="container d-flex rounded flex-row mt-5 flex-wrap">

        <!-- No hay resultados -->
        <!--<h4 class="bg-light shadow p-5 rounded text-muted border border-1">No hay resultados</h4>-->
        <!-- Fin no hay resultados -->

        <!-- Div tarjeta -->
        <div class="bg-light p-3 d-flex rounded border me-4 mt-4 flex-wrap">
            <div class="me-4">
                <img class="rounded-circle border" style="width: 10em" src="imgJugadores/fillol.jpg">
            </div>
            <div class="d-flex flex-column">
                <div class="d-flex">
                    <p class="text-dark mb-0">1&nbsp-&nbsp</p>
                    <p class="text-dark fw-bolder mb-0">Ubaldo Fillol</p>
                </div>

                <img class="mt-2" style="width: 2em" src="imgPosicion/arquero.png">

                <a class="mt-3 bg-dark text-decoration-none text-center text-light rounded">Perfil</a>
                <a class="mt-2 bg-dark text-decoration-none text-center text-light rounded">Editar</a>
                <a class="mt-2 bg-danger text-decoration-none text-center text-light rounded">Eliminar</a>

            </div>
        </div>

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

