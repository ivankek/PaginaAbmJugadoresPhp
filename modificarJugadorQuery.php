<?php

require "conexion.php";

if (isset($_GET["nombre"])) {

    $idJugador = $_GET["textId"];
    $nuevoNombre = ucfirst($_GET["nombre"]);
    $nombreViejo = ($_GET["nombreImg"]);
    $editar = "UPDATE Jugador set nombre='$nuevoNombre'  where numero = '$idJugador'";

    $conexion->query($editar);

    $directorio = './imgJugadores/';
    $ficheros3 = scandir($directorio);

    foreach ($ficheros3 as $img) {
        $nombreImg = explode(".", $img);
        if ($nombreImg[0] == $nombreViejo) {
            rename($directorio . $img, $directorio . $nuevoNombre . "." . $nombreImg[1]);
        }
    }

    header("location: jugadores.php");
}

if (isset($_GET["posicion"])) {
    $idJugador = $_GET["textId"];
    $nuevaPosicion = $_GET["posicion"];
    $editar = "UPDATE Jugador set posicion='$nuevaPosicion'  where numero = '$idJugador'";
    $conexion->query($editar);
    header("location: jugadores.php");
}

if (isset($_GET["numero"])) {
    $idJugador = $_GET["textId"];
    $nuevoNumero = $_GET["numero"];
    $editar = "UPDATE Jugador set numero='$nuevoNumero'  where numero = '$idJugador'";
    $conexion->query($editar);
    header("location: jugadores.php");
}

if (isset($_GET["descripcion"])) {
    $idJugador = $_GET["textId"];
    $nuevaDescripcion = $_GET["descripcion"];
    $editar = "UPDATE Jugador set descripcion='$nuevaDescripcion'  where numero = '$idJugador'";
    $conexion->query($editar);
    header("location: jugadores.php");
}

if (isset($_FILES["file"]["tmp_name"])) {


    if (isset($_POST["imagenVieja"])) {

        $fotoVieja = $_POST["imagenVieja"];
        $delimitador = explode("./imgJugadores/", $fotoVieja);
        $archivoBorrar = implode($delimitador);

        $directorio = "./imgJugadores/";
        $leerDirectorio = scandir($directorio);
        foreach ($leerDirectorio as $img) {

            if ($img == $archivoBorrar) {
                unlink($fotoVieja);


            }

        }

    }

    $idJugador = $_POST["textId"];
    $nombreJugador = $_POST["nombre"];
    $nuevaImagen = $_FILES["file"]["name"];

    $nuevoNombreJugador = ucfirst($nombreJugador);
    $rutaParaGuardar = "./imgJugadores/";
    $fijarArchivo = $rutaParaGuardar . $nuevoNombreJugador;
    $tipoDeArchivo = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
    $nombreImagen = $nuevoNombreJugador . "." . $tipoDeArchivo;


    $editar = "UPDATE Jugador set imagen='$nombreImagen'  where numero = '$idJugador'";
    $conexion->query($editar);


    move_uploaded_file($_FILES["file"]["tmp_name"], $fijarArchivo . "." . $tipoDeArchivo);

    header("location: jugadores.php");
    exit();

}

?>