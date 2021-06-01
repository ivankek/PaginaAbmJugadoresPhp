<?php

require "conexion.php";
include "mostrarJugador.php";

if (isset($_GET["busqueda"])) {
    $busqueda = $_GET["busqueda"];
    $busquedaJugador = "SELECT * FROM Jugador where (nombre =  '$busqueda') or (numero = '$busqueda') or (posicion = '$busqueda')";
}
$mostrarTodosLosJugadores = "SELECT * FROM Jugador";

function mostrarJugadores($result)
{
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


        mostrarJugador($nombre, $numero, $imgMostrar, $imgMostrarPosicion, $descripcion, $posicion);
    }
}

?>