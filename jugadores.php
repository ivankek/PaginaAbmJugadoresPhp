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


    <!--Agregar jugador botón-->
    <?php

    if (isset($_SESSION["nombre"])) {

        echo "<div class='d-grid gap-2 col-6 mx-auto mt-5'>
            <button class='btn btn-secondary' type='button' data-bs-toggle='modal' data-bs-target='#crearJugador'>
                Agregar Jugador <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus' viewBox='0 0 16 16'>
  <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/>
</svg></button>
        </div>";

    }

    ?>

    <!--Fin agregar jugador botón-->

    <!--Modal agregar jugador-->

    <div class="modal fade" id="crearJugador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="agregarJugador.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar un pokemon</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <input class="mb-2 mb-md-0 mb-lg-0 mb-xl-0 mb-xxl-0" name="numero" type="number"
                               placeholder="Número del jugador">
                        <input class="" name="nombre" type="text" placeholder="Nombre del jugador">

                        <div class="mt-3 mb-1">¿En que posición juega?</div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="posicion" id="arquero" value="arquero">
                            <label class="form-check-label" for="inlineCheckbox1">Arquero</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="posicion" id="defensor" value="defensor">
                            <label class="form-check-label" for="inlineCheckbox1">Defensor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="posicion" id="mediocampista"
                                   value="mediocampista">
                            <label class="form-check-label" for="inlineCheckbox1">Mediocampista</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="posicion" id="delantero"
                                   value="delantero">
                            <label class="form-check-label" for="inlineCheckbox1">Delantero</label>
                        </div>

                        <br>
                        <br>

                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Descripción del jugador:</label>
                            <textarea class="form-control " name="descripcion" id="descripcion"
                                      placeholder="Required example textarea"></textarea>
                            <div class="invalid-feedback">
                                Descripcion
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Foto del jugador</label>
                            <input type="file" name="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button class="fw-bolder btn btn-primary" type="submit" value="loguear">Agregar Jugador
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Final modal agregar jugador-->

    <!-- Div container lista de jugadores -->
    <div class="container-fluid flex-wrap d-flex flex-column justify-content-center flex-md-row flex-lg-row flex-xl-row flex-xxl-row rounded flex-row mt-4">


        <!-- No hay resultados -->
        <!--<h4 class="bg-light shadow p-5 rounded text-muted border border-1">No hay resultados</h4>-->
        <!-- Fin no hay resultados -->

        <!-- Div tarjeta -->

        <?php

        include "mostrarJugadores.php";

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

