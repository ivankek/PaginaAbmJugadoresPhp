<?php

require "conexion.php";

$id = isset($_POST["numero"]) ? $_POST["numero"] : "";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$posicion = isset($_POST["posicion"]) ? $_POST["posicion"] : "";
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";

$nuevoNombre = ucfirst($nombre);
$directorioImagenes = "./imgJugadores/";
$rutaConImagen = $directorioImagenes . $nuevoNombre;
$tipoDeArchivo = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
$nombreImagen = $nuevoNombre . "." . $tipoDeArchivo;

$sql = "SELECT * FROM Jugador WHERE numero = '$id'";
$insert = $conexion->query($sql);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $rutaConImagen . "." . $tipoDeArchivo)) {

    if ($insert) {
        $sql2 = "INSERT INTO Jugador (numero,nombre,descripcion,posicion,imagen) 
		            VALUES('$id ','$nuevoNombre', '$descripcion', '$posicion','$nombreImagen') ";

        $conexion->query($sql2);

        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
        header("location:jugadores.php");

        exit();
    }

}


?>