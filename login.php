<?php

require "conexion.php";


$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


$sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";

$result = $conexion->query($sql);

if ($fila = mysqli_fetch_array($result)) {

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