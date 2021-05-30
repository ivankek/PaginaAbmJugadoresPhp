<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 p-3">
    <div class="container d-flex">
        <img style="width: 2em; height: 2em" class="me-2" src="img/pelota.png">
        <a href="/../PaginaAbmJugadores/index.php" class="navbar-brand">Selección Argentina</a>
        <button class="navbar navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/../PaginaAbmJugadores/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/../PaginaAbmJugadores/jugadores.php">Jugadores</a>
                </li>
                <li class="nav-item">

                    <?php

                    session_start();

                    if (isset($_SESSION["nombre"])) {

                        echo "<div class='dropdown'>
                        <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1'
                        data-bs-toggle='dropdown' aria-expanded='false'>" . $_SESSION['nombre'] . "</button>
                        <ul class='dropdown-menu bg-secondary' aria-labelledby='dropdownMenuButton1'>
                        <li>
                        <a class='dropdown-item' href='logout.php'>Logout</a>
                        </li>
                        </ul>
                        </div>";
                    } else {
                        ?>

                        <a class="nav-link" data-bs-toggle="modal" href="" data-bs-target="#modalLogin">Login</a>
                        <?php

                    }
                    ?>

                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Modal login-->

<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Iniciar sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">

                    <input type="text" name="usuario" required placeholder="Nombre de usuario">
                    <input class="mt-2 mt-md-0 mt-lg-0 mt-xl-0 mt-xxl-0" type="password" name="password" required placeholder="Contraseña">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--Fin de modal login-->

<!-- Scripts bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
<!-- Fin scripts bootstrap-->

</body>
</html>