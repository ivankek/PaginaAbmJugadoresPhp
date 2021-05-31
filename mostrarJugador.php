<?php

function mostrarJugador($nombre, $numero, $imgMostrar, $imgMostrarPosicion, $descripcion, $posicion)
{
    echo "<div class='ms-4 ms-lg-3 mt-4'>";
    echo '<div class="card" style="width: 15rem;">';
    echo "<img src='$imgMostrar' class='card-img-top' style='height: 16rem;' alt='$nombre'>";
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
        echo "<li><a class='dropdown-item' href='modificarJugador.php?numero=$numero&nombre=$nombre&descripcion=$descripcion&posicion=$posicion&imagen=$imgMostrar&imagenPosicion=$imgMostrarPosicion'>Editar</a></li >";
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

function mostrarJugadorEdicion($nombre, $numero, $imgMostrar, $imgMostrarPosicion, $descripcion, $posicion)
{
    echo "<div class='ms-4 ms-lg-3 mt-4'>";
    echo '<div class="card" style="width: 15rem;">';
    echo "<img src='$imgMostrar' class='card-img-top' style='height: 16rem;' alt='$nombre'>";
    echo '<div class="card-body">';
    echo '<div class="d-flex">';
    echo "<h5 class='card-title text-primary'>$numero</h5>";
    echo "<h5 class='card-title'>&nbsp-&nbsp$nombre</h5>";
    echo "<img class='mt-1 ms-2 align-self-start' style='width: 2em' src='$imgMostrarPosicion'>";
    if (isset($_SESSION["nombre"])) {
        echo '<div class="dropdown position-absolute end-0 me-2">';

        echo "<a href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-three-dots-vertical' viewBox='0 0 16 16'>
  <path d='M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z'/>
</svg></a>";
        echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>";

        echo "<li><a href='borrarJugador.php?id=$numero' class='dropdown-item'>Eliminar</a></li>";

        echo '</ul>';
        echo '</div>';
    }
    echo '</div>';
    echo '<div class="d-flex flex-column">';
    echo '<p class="fs-5 text-center mb-0">Modificar:</p>';
    echo '<div class="d-flex flex-wrap mb-2 justify-content-center">';
    echo "<a data-bs-toggle='modal' data-bs-target='#edicionNombre' class='bg-dark ms-1 col-5 mt-1 text-decoration-none text-light bg-dark rounded text-center'>Nombre</a>";
    echo "<a data-bs-toggle='modal' data-bs-target='#edicionNumero' class='bg-dark ms-1 col-5 mt-1 text-decoration-none text-light bg-dark rounded text-center'>Número</a>";
    echo "<a data-bs-toggle='modal' data-bs-target='#edicionImagen' class='bg-dark ms-1 col-5 mt-1 text-decoration-none text-light bg-dark rounded text-center'>Imágen</a>";
    echo "<a data-bs-toggle='modal' data-bs-target='#edicionTipo' class='bg-dark ms-1 col-5 mt-1 text-decoration-none text-light bg-dark rounded text-center'>Posición</a>";
    echo "<a data-bs-toggle='modal' data-bs-target='#edicionDescripción' class='bg-dark col-6 ms-1 mt-1 text-decoration-none text-light bg-dark rounded text-center'>Descripción</a>";

    echo '</div>';
    echo '<a href="#" class="btn btn-primary mt-2">Ver Perfil</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo "</div>";


}

?>