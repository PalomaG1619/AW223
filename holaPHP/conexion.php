
<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDatos = "portafolio_db";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $baseDatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?>