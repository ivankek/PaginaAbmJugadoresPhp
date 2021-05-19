<?php

$conexion = new mysqli("localhost", "root", "Ivankek99edlp", "jugadores", 3306);

if ($conexion->connect_error) {
    echo "Error al conectar con la base de datos";
}

?>