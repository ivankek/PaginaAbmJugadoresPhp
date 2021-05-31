<?php

require "conexion.php";


$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


$sql = "SELECT * FROM usuario WHERE usuario = ?;";

$stmt = $conexion->prepare($sql);
$parametro = $usuario;
$stmt->bind_param("s", $parametro);
$stmt->execute();
$result = $stmt->get_result();

if ($fila = $result->fetch_assoc()) {

    echo $fila["usuario"];

    if ($fila['pass'] == $password) {
        session_start();

        $_SESSION['nombre'] = $usuario;

        header("Location: jugadores.php");
        exit();
    }
}

header("Location: jugadores.php");
exit();


?>