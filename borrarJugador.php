<?php

require "conexion.php";

if (isset($_GET["id"])) {

    /*Borrar imágen de jugador eliminado de la carpeta imágenes*/

    if (isset($_GET["imagen"])) {

        $imagenBorrar = $_GET["imagen"];
        $delimitador = explode("./imgJugadores/", $imagenBorrar);
        $archivoBorrar = implode($delimitador);

        $directorio = "./imgJugadores/";
        $leerDirectorio = scandir($directorio);
        foreach ($leerDirectorio as $img) {

            if ($img == $archivoBorrar) {
                unlink($imagenBorrar);

            }
        }
    }
    /*Borrar jugador*/

    $idBorrar = $_GET["id"];

    $borrar = "DELETE FROM Jugador where numero = '$idBorrar'";
    $conexion->query($borrar);

   /* echo '<script>alert("Eliminado Correctamente"); window.location="jugadores.php";</script>';*/
    header("location: jugadores.php");
} else {

    echo "No llegó id";

}


?>