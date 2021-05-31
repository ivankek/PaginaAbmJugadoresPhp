<?php

require "conexion.php";

if (isset($_GET["id"])) {

    $idBorrar = $_GET["id"];

    $borrar = "DELETE FROM Jugador where numero = '$idBorrar'";
    $conexion->query($borrar);
    header("location: jugadores.php");
} else {

    echo "No tiene id";

}


?>