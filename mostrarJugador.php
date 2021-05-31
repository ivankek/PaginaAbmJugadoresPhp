<?php

require "conexion.php";

$sql = "SELECT * FROM Jugador";
$result = $conexion->query($sql);

$directorioImagenes = "./imgJugadores/";
$directorioImagenesPosicion = "./imgPosicion/";
$leerDirectorioImagenes = scandir($directorioImagenes);
$leerDirectorioImagenesPosicion = scandir($directorioImagenesPosicion);

while ($fila = mysqli_fetch_array($result)) {

    $numero = $fila["numero"];
    $nombre = $fila["nombre"];
    $descripcion = $fila["descripcion"];
    $posicion = $fila["posicion"];
    $imagen = $fila["imagen"];

    /*buscamos coincidencia entre el nombre del pokemon y el nombre de la imagen */
    foreach ($leerDirectorioImagenes as $img) {
        $extencionImg = explode(".", $img);

        if ($extencionImg[0] == ucfirst($fila['nombre'])) {
            $imgMostrar = $directorioImagenes . $img;
        }
    }
    /*buscamos coincidencia entre el tipo de pokemon y el tipo de la imagen */
    foreach ($leerDirectorioImagenesPosicion as $img2) {
        $extension = explode(".", $img2);
        if ($extension[0] == $posicion) {
            $imgMostrarPosicion = $directorioImagenesPosicion . $img2;
        }
    }


    echo '<div id="tarjetaJugador" class="bg-light p-3 d-flex me-4 mt-4 flex-wrap">';

    echo "<div class='me-4'>
        <img id='imgJugador' class='rounded-circle border' src='$imgMostrar'>
    </div>";

    echo '<div class="d-flex flex-column me-2">';

    echo '<div class="d-flex">
            <p class="text-dark mb-0">' . $numero . '&nbsp-&nbsp</p>
            <p class="text-dark fw-bolder mb-0">' . $nombre . '</p>
        </div>';

    echo "<img class='mt-2' style='width: 2em' src='$imgMostrarPosicion'>";


    echo '<a class="mt-3 bg-dark text-decoration-none text-center text-light rounded">Perfil</a>';

    if (isset($_SESSION["nombre"])) {

        echo '<a class="mt-2 bg-dark text-decoration-none text-center text-light rounded">Editar</a>';
        echo "<a href='borrarJugador.php?id=$numero' class='mt-2 bg-danger text-decoration-none text-center text-light rounded'>Eliminar</a>";


    }


    echo '</div>';

    echo '</div>';
}


?>