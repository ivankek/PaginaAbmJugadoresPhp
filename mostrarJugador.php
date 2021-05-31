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
        $extensionImg = explode(".", $img);

        if ($extensionImg[0] == ucfirst($fila['nombre'])) {
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


    echo "<div class='ms-4 ms-lg-3 mt-4'>";
    echo '<div class="card" style="width: 15rem;">';
    echo "<img src='$imgMostrar' class='card-img-top' alt='$nombre'>";
    echo '<div class="card-body">';
    echo '<div class="d-flex">';
    echo "<h5 class='card-title text-primary'>$numero</h5>";
    echo "<h5 class='card-title'>&nbsp-&nbsp$nombre</h5>";
    if (isset($_SESSION["nombre"])) {
        echo '<div class="dropdown position-absolute end-0 me-2">';

        echo "<a href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-three-dots-vertical' viewBox='0 0 16 16'>
  <path d='M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z'/>
</svg></a>";
        echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>";
        echo '<li><a class="dropdown-item" href="#">Editar</a></li >';
        echo "<li><a href='borrarJugador.php?id=$numero' class='dropdown-item'>Eliminar</a></li>";

        echo '</ul>';
        echo '</div>';
    }
    echo '</div>';
    echo '<div class="d-flex flex-column">';
    echo '<div class="d-flex">';
    echo '<h5 class="mt-1">Posición:</h5>';
    echo "<img class='mt-2 ms-2 align-self-start' style='width: 2em' src='$imgMostrarPosicion'>";
    echo '</div>';
    echo '<a href="#" class="btn btn-primary mt-2">Ver Perfil</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo "</div>";

}
?>